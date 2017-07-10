<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


	<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="styles.css">

</head>

<body class="edit">

<?php

require_once('connection.php');

	$id = $_GET['id'];

	$sql = "SELECT * FROM persona WHERE id=$id";

	$result = mysqli_query($connect,$sql);

	if (mysqli_num_rows($result)>0) {
		while ($row=mysqli_fetch_assoc($result)) {
			extract($row);
		}
		echo "<div class='container-fluid'>
				<div class='table-responsive'>
					<form action='' method='POST'>
						<fieldset style=width: 30%;'>
							<legend><h1>EDIT PERSONA</h1></legend>
								<div class='form-group'>
									Name: <input type='text' name='name' placeholder='Name' value='$name'>
								</div>
								<div class='form-group'>
									Arcana Name: <input type='text' name='arcana' placeholder='Name of Arcana' value='$arcanaName'>
								</div>
								Description: 
								<div class='form-group'>
									<textarea class='form-control' name='description' rows='4' placeholder='Description'>$description</textarea>
								</div>
								<div class='form-group'>
									Image: <input type='file' name='image' placeholder='Image' value='$image' required>
								</div>
								<div class='form-group'>
									<button class='btn btn-success' class='btn btn-default' type='submit' name='update'>Update</button>
								</div>
						</fieldset>
					</form>
				</div>	
			</div>";

		if (isset($_POST['update'])) {
			$name = $_POST['name'];
			$arcana = $_POST['arcana'];
			$description = $_POST['description'];
			$image = $_POST['image'];

			$sql = "UPDATE persona SET name = '$name', arcanaName = '$arcana', description = '$description', image = '$image' WHERE id='$id'";

			mysqli_query($connect,$sql);

			header('location: fool.php');
		}

		if (isset($_POST['cancel'])) {
			header('location: new2.php');
		}

	}




?>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>



