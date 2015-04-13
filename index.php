<?php
include 'session.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>SquareOne | Your feed aggregator</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/stylesheet.css">
		<!-- Latest compiled and minified JavaScript -->
		<script src="js/jquery-1.11.2.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/index.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<?php include("_navbar.php"); ?>
		<div class="jumbotron text-center">
			<div class="container">
			  <h1>Hello, reader!</h1>
			  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies, dui id elementum ornare, quam ligula facilisis neque, at semper libero lorem in augue. Nullam.</p>
			  <p><a class="btn btn-primary btn-lg" href="#signupModal" role="button"  data-toggle="modal" data-target="#signinModal">Get Started</a></p>
			</div>
		</div>
		<hr class="half-rule">
		<!-- <script>
			$(function() {
			  $('#formSubmit').click(function() {
			    signUp();
			  });
			});
			
		</script> -->
	</body>
</html>