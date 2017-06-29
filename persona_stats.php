<?php
	require('connection.php');

	$sql = "SELECT * FROM persona_stats";

	$show = mysqli_query($connect,$sql);

	if (mysqli_num_rows($show) > 0) {
		while ($row = mysqli_fetch_assoc($show)) { 
			extract($row);

			echo "
				<div class='container-fluid'>
					<div class='row'>
						<h3>$HP</h3>
						<h3>$strongAgainst</h3>
						<h3>$weakAgainst</h3>
						<h3>$primaryskills</h3>
						<h3>$secondaryskills</h3>
					</div>
				</div>";
		}
	}

	require_once('template.php');


?>