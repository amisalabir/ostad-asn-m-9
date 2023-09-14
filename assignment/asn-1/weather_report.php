<!doctype html>
<html lang="us">
<head>
	<meta charset="utf-8">
	<title>Task 5: Weather Report</title>
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
                    <u><h2>Weather Report</h2></u>
					
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
            <label for="CelsiusorFahrenheit"><h5>Enter Temperature Value in °C:</h5>  </label>
                     
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
            
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        echo " <div id=\"result\">";
                        $temperature = $_POST["num1"];
                        
                        if($temperature==0 || $temperature<=4){

                            echo "$temperature °C ! It's freezing !!";

                        } 
                        if($temperature>4 && $temperature<=21){

                            echo "$temperature °C ! It's cool !!"; 
                        }
                        if($temperature>21){
                            echo "$temperature °C ! It's warm !!"; 
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
