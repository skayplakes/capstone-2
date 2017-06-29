<?php
	require_once('connection.php'); 

	$sql = "SELECT * FROM complete_persona";

	$show = mysqli_query($connect,$sql);

	if (mysqli_num_rows($show) > 0) {
		while ($row = mysqli_fetch_assoc($show)) { 
			extract($row);

			echo "
				<div class='container-fluid'>
					<div class='row'>
						<h3>$persona_stats_id</h3>
						<h3>$primaryskills</h3>
						<h3>$secondaryskills</h3>
					</div>
				</div>";
		}
	}

	require_once('template.php');



?>