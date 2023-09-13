<!doctype html>
<html lang="us">
<head>
	<meta charset="utf-8">
	<title>Task 2: Temperature Converter</title>
	<link href="../../jquery-ui/jquery-ui.css" rel="stylesheet">
    <link rel="stylesheet" href="../../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../resources/css/style.css">
	<style>
	body{
		font-family: "Trebuchet MS", sans-serif;
		margin: 50px;
	}
	.demoHeaders {
		margin-top: 2em;
	}
	#dialog-link {
		padding: .4em 1em .4em 20px;
		text-decoration: none;
		position: relative;
	}
	#dialog-link span.ui-icon {
		margin: 0 5px 0 0;
		position: absolute;
		left: .2em;
		top: 50%;
		margin-top: -8px;
	}
	#icons {
		margin: 0;
		padding: 0;
	}
	#icons li {
		margin: 2px;
		position: relative;
		padding: 4px 0;
		cursor: pointer;
		float: left;
		list-style: none;
	}
	#icons span.ui-icon {
		float: left;
		margin: 0 4px;
	}
	.fakewindowcontain .ui-widget-overlay {
		position: absolute;
	}
	select {
		width: 200px;
	}
	</style>
</head>
<body>

<div class="top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="text-center">
                    <u><h2>Temperature Converter</h2></u>
					
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
            <label for="CelsiusorFahrenheit"><h5>Celsius or Fahrenheit:</h5>  </label>
                     
            <input class="form-control form-control-lg" type="number" name="num1" placeholder="Enter value in Celsius or Fahrenheit " required><br>
            <label for="convertTo"><h5>Convert to:</h5> </label>
            <select class="form-control form-control-lg" name="operation">
                <option selected value="">Select option to convert</option>
                <option value="celsius">Celsius</option>
                <option value="fahrenheit">Fahrenheit</option>
            </select><br>
            <button type="submit" class="btn btn-primary">Get Result</button>
        </form>
        <div id="result">
            <?php
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST["num1"];
                $operation = $_POST["operation"];

                switch ($operation) {
                    case "celsius":
                        $result = (($num1-32)*5)/9 ; //  Fahrenheit to Celsius 
                        echo "<h5>Temperature: $num1 °F equal to $result °C</h5>";
                        break;
                    case "fahrenheit":
                        $result = (($num1*9)/5)+32 ; // Celsius to Fahrenheit
                        echo "<h5>Temperature: $num1 °C equal to $result °F</h5>";
                        break;
        
                }
            }
            ?>
        		</div>              
                    </div>
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
