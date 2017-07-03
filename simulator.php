<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>

<?php
	require_once('connection.php');

	$sql = "SELECT * FROM complete_persona c JOIN primaryskills p ON (c.primaryskills=p.id) JOIN secondaryskills s ON (c.secondaryskills=s.id) JOIN persona_stats pr ON (pr.primaryskills=p.id) JOIN persona pe ON (pe.id=pr.id)"; 
	//to join primaryskills, secondaryskills, persona stats, and persona name

	$show = mysqli_query($connect,$sql);

	if (mysqli_num_rows($show) > 0) {
		echo "
			<div class='container'>
				<div class='row'>
					<div class='col-md-12'>
						<h2>Persona Stats</h2>
						  <p>Skills</p>            
						  <table class='table table-bordered'>
						     <thead>
						      <tr>
						        <th>Primary Skill</th>
						        <th>Primary Description</th>
						        <th>Damage</th>
						      </tr>

						    </thead>";


		while ($row = mysqli_fetch_assoc($show)) { 
			extract($row);

			echo "
				    <tbody>
				      <tr>
				        <td>$primaryName</td>
				        <td>$primaryDescription</td>
				        <td>$primaryDamage</td>

				    </tbody>
				      
				      ";
		}
			echo "
			
			      </table>
				</div>
			</div>
		</div>";
	}


?>

</body>
</html>



