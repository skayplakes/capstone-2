<?php
	require('connection.php');

	$sql = "SELECT * FROM primaryskills";

	$show = mysqli_query($connect,$sql);

	if (mysqli_num_rows($show) > 0) {
		while ($row = mysqli_fetch_assoc($show)) { 
			extract($row);

			echo "
				<div class='container-fluid'>
					<div class='row'>
						<h3>$primaryName</h3>
						<h3>$primaryDamage</h3>
						<h3>$primaryDescription</h3>
					</div>
				</div>";
		}
	}

	require_once('template.php');


?>