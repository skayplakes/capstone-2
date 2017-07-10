<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="styles.css">


</head>

<body class="addpersona">

<?php

require_once 'connection.php';

	if (isset($_POST['add_persona'])) {
		
		$name = $_POST['name'];
		$arcana = $_POST['arcana'];
		$description = $_POST['description'];
		$image = $_POST['image'];
		$sql = "INSERT INTO persona (name,arcanaName,description,image) VALUES ('$name','$arcana','$description','$image')";

		// echo "Item added successfuly.";

		$result = mysqli_query($connect,$sql);

		if ($result)
			header('location: fool.php');

		}

		if (isset($_POST['cancel'])) {
			header('location: fool.php');
		}

?>

	<div class="container-fluid">
		<form id="register" action="" method="POST">
			<fieldset>
				<legend><h1 class="add">Register a new Persona</h1></legend>
					<div class="form-group">
						<input type="text" name="name" placeholder="Name">
					</div>

					<select name="arcana" class="form-control">
						<option value="pick">--Select Arcana--</option>
						<?php
							require('connection.php');

							$sql = mysqli_query($connect, "SELECT * FROM arcana");
							$row = mysqli_num_rows($sql);
							while ($row = mysqli_fetch_array($sql)){
							echo "<option value='". $row['arcanaName'] ."'>" .$row['arcanaName'] ."</option>" ;
							}
						?>
					</select> <!--dropdown list taken from database-->

					<br>

					<div class="form-group">
						<textarea class="form-control" rows="4" name="description" placeholder="Description"></textarea>
					</div>
					<div class="form-group">
						<input type="file" name="image" placeholder="Image">
					</div>
					<div class="form-group">
						<input class="btn btn-success" class="btn btn-default" type="submit" name="add_persona" value="Add Item">
					</div>
					<div class="form-group">
						<input class="btn btn-danger" class="btn btn-default" type="submit" name="cancel" value="Cancel">
					</div>
			</fieldset>
		</form>	

	</div>

	<script src="jquery-3.2.1.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>