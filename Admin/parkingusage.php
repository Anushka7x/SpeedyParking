<!DOCTYPE html>
<html lang="en">
    <?php
    include 'action.php';
    include 'auth.php';
    ?>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Parking Usage</title>
    
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/bootstrap.min.js"></script>
    
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    
        <link rel="stylesheet" href="./Style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
            integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

</head>
<body>
<?php
  include 'header.php';
  ?>
	<div class="container">
		<div class="jumbotron">
			<h1>Parking Usage Page</h1>
			<p>Welcome to our parking facility. Here's everything you need to know:</p>
		</div>
		<div class="row">
			<div class="col-md-6">
				<h2>Location and Hours</h2>
				<p>We're located at 123 Indore St. and we're open 24/7.</p>
			</div>
			<div class="col-md-6">
				<h2>Fees and Payment Options</h2>
				<p>Our hourly rate is ₹2.00 per hour and we accept cash, credit, and debit cards.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<h2>Rules and Regulations</h2>
				<ul>
					<li>Parking is limited to 2 hours per vehicle.</li>
					<li>Only vehicles under 6 feet tall are allowed.</li>
					<li>No overnight parking is allowed.</li>
				</ul>
			</div>
			<div class="col-md-6">
				<h2>Accessibility</h2>
				<p>We have designated accessible parking spaces near the entrance.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<h2>Security</h2>
				<p>We have security cameras and staff on site 24/7 for your safety.</p>
			</div>
			<div class="col-md-6">
				<h2>Contact Information</h2>
				<p>If you have any questions or concerns, please contact us at (91+) 123-4567890.</p>
			</div>
		</div>
	</div>
    <hr class="my-hr">
    <?php
        include 'footer.php';
    ?>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

</body>
</html>
