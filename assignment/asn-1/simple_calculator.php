<!doctype html>
<html lang="us">
<head>
	<meta charset="utf-8">
	<title>Task 7: Simple Calculator</title>
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
                    <u><h2>Simple Calculator</h2></u>
					
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
            <input class="form-control form-control-lg" type="number" name="num1" placeholder="Enter first number" required><br>
            <input class="form-control form-control-lg" type="number" name="num2" placeholder="Enter second number" required><br>
            <select class="form-control form-control-lg" name="operation">
                <option value="add">Addition</option>
                <option value="subtract">Subtraction</option>
                <option value="multiply">Multiplication</option>
                <option value="divide">Division</option>
            </select><br>
            <div class="text-center submit" id="">
                        <button type="submit" class="btn btn-primary">Calculate</button>
                    </div>
                 </form>

     
            <?php
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                echo " <div id=\"result\">";
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $operation = $_POST["operation"];

                switch ($operation) {
                    case "add":
                        $result = $num1 + $num2;
                        echo "Result: $result";
                        break;
                    case "subtract":
                        $result = $num1 - $num2;
                        echo "Result: $result";
                        break;
                    case "multiply":
                        $result = $num1 * $num2;
                        echo "Result: $result";
                        break;
                    case "divide":
                        if ($num2 != 0) {
                            $result = $num1 / $num2;
                            echo "Result: $result";
                        } else {
                            echo "Cannot divide by zero.";
                        }
                        break;
                    case "binary":
                        echo "Binary: " . decbin($num1);
                        break;
                    case "octal":
                        echo "Octal: " . decoct($num1);
                        break;
                    case "hexadecimal":
                        echo "Hexadecimal: " . dechex($num1);
                        break;
                }
            
                echo " </div>";

            }
            ?>
                    
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
