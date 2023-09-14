<!doctype html>
<html lang="us">
<head>
	<meta charset="utf-8">
	<title>Task 4: Even or Odd Checker</title>
	<link href="../../jquery-ui/jquery-ui.css" rel="stylesheet">
    <link rel="stylesheet" href="../../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../resources/css/style.css">
</head>
<body>

<div class="top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="text-center">
                    <u><h2>Even or Odd Checker</h2></u>
					
                    </div>
                </div>
            </div>
        </div>
</div> 
<hr>
<div class="container">
            <div class="row align-items-center">
                <div class="col-md-4"></div>

				<div class="col-md-4">
                    <div class="text-left">
                    <form method="post" action="">
            <label for="CelsiusorFahrenheit"><h5>Enter Number:</h5>  </label>
                     
            <input class="form-control form-control-lg" type="number" name="num1" placeholder="Enter a nmuber" required><br>
            <br>
            <button type="submit" class="btn btn-primary">Get Result</button>
        </form>           
                    </div>
                </div>
				<div class="col-md-4"></div>
            </div>
        </div>
        <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center">
               
                    <?php
            
                    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["num1"])) {
                        echo " <div id=\"result\">";
                        $num1 = $_POST["num1"];
                        if($num1!=0){

                            echo ($num1 % 2 ? "You have entered $num1. It's Odd." : "You have entered $num1. It's Even. ");

                        } else{

                            echo "You have entered 0 ! Please enter number again."; 
                        }
                        
                        echo " </div>";

                    } ?>


               
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
<footer id="footer">
	<div class="container footer">
		<div class="row">
			<div class="col-md-12 text-center">
			
			<a href="../../index.php">Home</a>
			
			</div>
		</div>
	</div>
</footer>		

<script src="../../jquery-ui/external/jquery/jquery.js"></script>
<script src="../../jquery-ui/jquery-ui.js"></script>

</body>
</html>
