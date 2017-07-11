<!DOCTYPE html>
<html>
<head>
	<title>Main Menu</title>

	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="styles.css">


</head>
<body class="loadingpage">

	<div class="container-fluid welcomebanner">
		<h1>Welcome to the Wiki</h1>
		<p>We're glad you're here! We're striving to be the best resource about the world of Persona on the net, so we cover all aspects of Atlus's smash hit. Whatever knowledge you have—whether it's about the anime, music, video games or movies—is welcome here. Just <a href="index.php">sign up</a> for a totally free account and start contributing today! If you run into problems, be sure to give one of our admins a shout! Oh, and don't forget to visit our guidelines and Manual of Style to get some tips on the best ways you can help us grow this database!</p>

		<p>To start, click on the images throughout the site to start exploring the content of the wiki. Enjoy!</p>
	</div>

	<div class="container imagenavbar">
		<div class="row row-centered">
			<div class="col-md-6">
				<a href="arcanas.php"><img src="images/tarotfinal.png" class="img-responsive arcanas"></a>
			</div>
			<div class="col-md-6">
				<a href="fool.php"><img src="images/personabutton.png" class="img-responsive personas"></a>
			</div>

		</div>
	</div>

<?php require('partials/footer.php'); ?>


	<!-- Latest compiled and minified JavaScript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>