<!DOCTYPE html>
<html>
<head>
	<title></title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

<?php
	require_once('connection.php'); 

	$sql = "SELECT * FROM persona";

	$show = mysqli_query($connect,$sql);

	if (mysqli_num_rows($show) > 0) {
		while ($row = mysqli_fetch_assoc($show)) { 
			extract($row);

			echo "
				<div class='container-fluid'>
					<div class='row'>
						<img src=images/$image>
						<h3>$name</h3>
						<h3>$arcanaName</h3>
						<p>$description</p>
					</div>
				</div>";
		}
	}

	require_once('template.php');




?>





	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>



