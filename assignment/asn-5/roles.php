<?php
    session_start();

    if($_SESSION['role'] != 'admin')
    {
        setcookie("errorMsg", "You are not authorized to access this page!", time() + 5);
        header("Location: login.php");
    }

    if(isset($_POST['add'])){
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $password = SHA1(MD5($_POST['password']));;

        if(strlen($username) == 0 && strlen($email) == 0 && strlen($password) == 0)
        {
            setcookie("errorMsg", "All fields are required!", time() + 5);
            header("Location: roles.php");
            return;
        }
        else if(strlen($username) == 0)
        {
            setcookie("errorMsg", "Username field is required!", time() + 5);
            header("Location: roles.php");
            return;
        }
        else if(strlen($email) == 0)
        {
            setcookie("errorMsg", "Email field is required!", time() + 5);
            header("Location: roles.php");
            return;
        }
        else if(strlen($password) == 0)
        {
            setcookie("errorMsg", "Password field is required!", time() + 5);
            header("Location: roles.php");
            return;
        }

        $role = "user";
        $file = "./data/users.txt";
        $previous_data = file_get_contents($file);
        $previous_data = json_decode($previous_data, true);

        foreach($previous_data as $data)
        {
            $previousEmail = trim($data[3]);
            if($previousEmail == $email){
                setcookie("errorMsg", "Email exists! Please another", time() + 5);
                header("Location: roles.php");
                return;
            }
        }

        $sl = count($previous_data);
        $previous_data[] = array($sl,$role, $username, $email, $password);
        $new_data = json_encode($previous_data);
        file_put_contents($file, $new_data,LOCK_EX);
        setcookie("successMsg", "User Successfully Added!", time() + 5);
        header("Location: roles.php");
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RBACK</title>
    <!-- Add Bootstrap CSS link -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10"> 
    <nav class="navbar navbar-expand-lg navbar-blue bg-blue">
     <a class="navbar-brand" href="index.php"> RBAC System &nbsp; User Profle </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <?php
                    if($_SESSION['role'] == 'admin'){
                ?>
                <li class="nav-item active">
                    <a class="nav-link" href="roles.php"> <span class="sr-only">(current)</span></a>
                </li>
                <?php
                    }
                ?>
            </ul>
            
            <form class="form-inline my-2 my-lg-0">
            <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
            <a href="logout.php" class="btn btn-outline-danger my-2 my-sm-0" type="submit">Logout</a>
            </form>
        </div>
    </nav>
    
    <div class="m-3">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addUser">Add new</button>
    </div>
    
    <p class="text-center text-success">
        
    </p>
    <p class="text-center text-danger">
        <?php echo isset($_COOKIE['errorMsg']) ? $_COOKIE['errorMsg'] : '';?>
    </p>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $file = "./data/users.txt";
                $user_data = file_get_contents($file);
                $user_data = json_decode($user_data, true);
                $count = 0;
                foreach($user_data as $data)
                {
                    $count++;
                    $sl = trim($data[0]);
                    $role = trim($data[1]);
                    $username = trim($data[2]);
                    $userEmail = trim($data[3]);
                    $userPassword = trim($data[4]);
            ?>
            <tr>
                <th scope="row"><?php echo $count;?></th>
                <td><?php echo $username;?></td>
                <td><?php echo $userEmail;?></td>
                <td><?php echo $role;?></td>
                <td>
                    <a href="edit.php?id=<?php echo $sl; ?>" class="btn btn-primary">Edit</a>
                    <a href="delete.php?id=<?php echo $sl; ?>" class="btn btn-danger" onClick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>

    <!-- Add Modal -->

    <div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="addUser" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="add">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
        <div class="col-md-1"></div>
    </div>
   </div> 
        
    <!-- Add Bootstrap JS and Popper.js if needed -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>