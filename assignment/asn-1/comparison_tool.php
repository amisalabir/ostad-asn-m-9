<!doctype html>
<html lang="us">
<head>
    <meta charset="utf-8">
    <title>Task 6: Comparison Tool</title>
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
                        <u>
                            <h2>Comparison Tool</h2>
                        </u>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-3"></div>

            <div class="col-md-6">
                <form method="post" action="">
                    <div class="row">
                        <div class="col text-center">
                            <label for="number1">
                                <h5>First Number</h5>
                            </label>
                            <hr>
                            <input type="number" name="number1" class="form-control" placeholder="Enter First Number" required>
                        </div>
                        <div class="col text-center">
                            <label for="number2">
                                <h5>Second Number</h5>
                            </label>
                            <hr>
                            <input type="number" name="number2" class="form-control" placeholder="Enter Second Number" required>
                        </div>
                    </div>
                    <div class="text-center submit" id="">
                        <button type="submit" class="btn btn-primary">Compare the Numbers</button>
                    </div>

                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['number1'])) {
                    echo " <div id=\"result\">";

                    $reslt =($_POST['number1'] == $_POST['number2']) ? "Both numbers are equal" :( ($_POST['number1'] > $_POST['number2']) ? "First number: ".$_POST['number1'] . " is larger than " . $_POST['number2'] : "Second number ".$_POST['number2']." is larger than  first number: ". $_POST['number1']);

                    echo $reslt;

                    echo " </div>";
                } ?>

            </div>
            <div class="col-md-3"></div>
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