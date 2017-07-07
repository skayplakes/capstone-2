<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<style type="text/css">
		body {
			background-image: url(images/igor2.jpg);
			background-repeat: no-repeat;
			background-position: center center;
			background-attachment: fixed;
			background-size: cover;
			color: white;
		}

		.deletetable {
			border: 1px solid black;
			margin: 10px;
			background-color: black;
			opacity: 0.7;
			width: 50%;

		}

	</style>

</head>
<body>

<?php

require_once('connection.php');

	$id = $_GET['id'];

	$sql = "SELECT * FROM persona WHERE id=$id";

	$result = mysqli_query($connect,$sql);

	if (mysqli_num_rows($result)>0) {
		while ($row=mysqli_fetch_assoc($result)) {
			extract($row);
		}

		echo "
			<div class='container-fluid deletetable'>	
				<div class='row'>
					<div class='col-xs-4'>
						<div class='item_image'>
							<img src=images/$image width='200px' class='img-responsive'>
						</div>
					</div>
					<div class='col-xs-8 personatext'>
						<h3>$name</h3>
						<h5>$arcanaName</h5>
						<p>$description</p>

						<h2><p>Are you sure you want to forget this Persona?</p></h2>

						<form method='post' action=''>
							<button class='btn btn-danger' type='submit' name='yes'>YES</button>
							<button class='btn btn-default' type='submit' name='no'>NO</button>
						</form>
					</div>
				</div>

				
			</div>";

		if (isset($_POST['yes'])) {

			// $sql = "UPDATE earphones SET Name = '$name', Price = '$price', Description = '$description', Category = '$category', Images = '$image' WHERE id='$id'";

			$sql = "DELETE FROM persona WHERE id='$id'";

			mysqli_query($connect,$sql);

			header('location: new.php');
		}

		if (isset($_POST['no'])) {
			header('location: fool.php');
		}

	}

?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>



