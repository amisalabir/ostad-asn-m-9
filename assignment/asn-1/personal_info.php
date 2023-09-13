<!doctype html>
<html lang="us">
<head>
	<meta charset="utf-8">
	<title>Task 1: Personal Information Page</title>
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
                    <u><h2>Personal Information</h2></u>
					
                    </div>
                </div>
            </div>
        </div>
</div> 
<div class="container-fluid">
        <div class="row align-items-center">
			 <div class="col-md-4"></div>	
              <div class="col-md-3">
                <?php
				$name="Kazi Sala Uddin";
				$age=37;
				$country="Bangladesh";

				printf("Name: %s <br> Age: %d <br> Country: %s",$name,$age,$country);
				?>
				
            </div>
            <div class="col-md-1 text-center">
             <img width="90px" class="img-circle" src="../../resources/img/kazi.jpg">       
            </div>
			<div class="col-md-4"></div>	
        </div>
</div>
<hr>
<div class="container">
            <div class="row align-items-center">
                <div class="col-md-3"></div>

				<div class="col-md-6">
                    <div class="text-left">
                    <h5>About Me:</h5>
					<p class="text-justify">
					 I'm glad to introduce me to you. This is <b>Kazi Sala Uddin</b> from <b>Chittagong</b>.I'm a freelance professional. My expertise in Digital Marketing, PHP Programming & Linux Server Administration. I have completed my graduation & post-graduation from university of Chittagong in English Language and Literature.
					</p>
                    </div>
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
