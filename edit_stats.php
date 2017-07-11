<!DOCTYPE html>
<html>
<head>
	<title>Edit Stats</title>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


	<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body class="edit-stats">

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
					<form action='' method='POST' class='edit_form'>
					<fieldset style=width: 30%;'>
							<h1 class='edit_stats'>EDIT PERSONA STATS</h1>
					</fieldset>
						<table class='table table-bordered table-condensed stats-persona table-responsive'>
				        	<thead>
				        		<tr class>
				        			<th class='warning'>HP</th>
				        			<th class='success'>Resists</th>
				        			<th class='danger'>Weakness</th>
				        		</tr>
						        	<tbody>
						        		<tr>
						        			<td><input type='number' name='HP' placeholder='HP' value='$HP'></td>
						        			<td><input type='text' name='strong' placeholder='Strong Against' value='$strongAgainst'></td>
						        			<td><input type='text' name='weak' placeholder='Weak Against' value='$weakAgainst'></td>
						        		</tr>
						        	</tbody>
				        		<tr>
				        			<th class='warning'>Primary Skill</th>
				        			<th class='success'>Description</th>
				        			<th class='danger'>Damage</th>
				        		</tr>
						        	<tbody>
						        		<tr>
						        			<td><input type='text' name='primaryskill' placeholder='Primary Skill' value='$primarySkill'></td>
						        			<td><input type='text' name='primarydescription' placeholder='Primary Description' value='$primaryDescription'></td>
						        			<td><input type='number' name='primarydamage' placeholder='Primary Damage' value='$primaryDamage'></td>
						        		</tr>
						        	</tbody>
				        		<tr>
				        			<th class='warning'>Secondary Skill</th>
				        			<th class='success'>Description</th>
				        			<th class='danger'>Damage</th>
				        		</tr>
						        	<tbody>
						        		<tr>
						        			<td><input type='text' name='secondaryskill' placeholder='Secondary Skill' value='$secondarySkill'></td>
						        			<td><input type='text' name='secondarydescription' placeholder='Secondary Description' value='$secondaryDescription'></td>
						        			<td><input type='number' name='secondarydamage' placeholder='Secondary Damage' value='$secondaryDamage'></td>
						        		</tr>
						        	</tbody>
				        	</thead>
						</table>


							<div class='form-group'>
								<input class='btn btn-success' class='btn btn-default' type='submit' name='edit' value='Edit'>
							</div>

							<div class='form-group'>
								<input class='btn btn-danger' class='btn btn-default' type='submit' name='cancel' value='Cancel'>
							</div>

					</form>";

			if (isset($_POST['edit'])) {
				$hp = $_POST['HP'];
				$strong = $_POST['strong'];
				$weak = $_POST['weak'];
				$primaryskill = $_POST['primaryskill'];
				$primarydescription = $_POST['primarydescription'];
				$primarydamage = $_POST['primarydamage'];
				$secondaryskill = $_POST['secondaryskill'];
				$secondarydescription = $_POST['secondarydescription'];
				$secondarydamage = $_POST['secondarydamage'];

				// $name = $_POST['name'];
				// $arcana = $_POST['arcana'];
				// $description = $_POST['description'];
				// $image = $_POST['image'];

				$sql = "UPDATE persona SET HP = '$hp', strongAgainst = '$strong', weakAgainst = '$weak', primarySkill = '$primaryskill', primaryDescription = '$primarydescription', primaryDamage = '$primarydamage', secondarySkill = '$secondaryskill', secondaryDescription = '$secondarydescription', secondaryDamage = '$secondarydamage' WHERE id='$id'";

				mysqli_query($connect,$sql);

				header('location: fool.php');
			}

			if (isset($_POST['cancel'])) {
				header('location: fool.php');
			}
	}
?>

<?php require_once('partials/footer.php'); ?>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>