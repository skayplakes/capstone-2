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
								<button class='btn btn-default' type='submit' name='cancel'>Cancel</button>
							</div>
					</fieldset>
				</form>	
			</div>";

		if (isset($_POST['update'])) {
			$name = $_POST['name'];
			$arcana = $_POST['arcana'];
			$description = $_POST['description'];
			$image = $_POST['image'];

			$sql = "UPDATE persona SET name = '$name', arcanaName = '$arcana', description = '$description', image = '$image' WHERE id='$id'";

			mysqli_query($connect,$sql);

			header('location: new.php');
		}

		if (isset($_POST['cancel'])) {
			header('location: new.php');
		}

	}




?>