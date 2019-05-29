<!--

### AUTHOR::YOUNESS.M ###
### GITHUB:: https://github.com/youness-marrakchi/ ###

-->

<!DOCTYPE html>
<html>
<head>
	<title>test layout</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/index.css">

</head>
<body>

<!-- form popup section -->
	<div id="popup" class="bgholder">
		<div class="modal_form align-self-center">
			<h3>fill in the form</h3>
			<form method="POST" action="application/app.php">
				<input type="text" name="theTask" placeholder="what do you want to remmember ?">
				<input type="text" name="description" placeholder="any additional information...">
				<h6>** optional **</h6>
				<button type='submit' name='add' class='btn btn-info float-right'>submit</button>
				<button type='button' id="canceller" class='btn btn-warning float-left'>exit</button>
			</form>
		</div>
	</div>
<!-- section's end -->

<header class="bg-info text-white p-2 mp-4">
	<center><h4 class="lead text4">todo app</h4></center>
</header>
<br>

<div class="container">
		<p class="pp lead" style="text-align:left;font-size: 2rem;">Add A New Task <button id="button" style="float: right;" type="button" class="btn btn-info float-right">+</button></p>

	<!-- check home.php to understand it -->
	<php echo $text ?>

	<!-- displaying the list of tasks -->
	<?php include 'home.php'; ?>
	<br>

</div>
<script type="text/javascript" src="js/index.js"></script>
</body>
</html>