<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="gallery/css/blueimp-gallery.min.css">

	<style type="text/css">
		img {
			width: 100px;
			height: 100px;
		}
	</style>
</head>
<body>

<?php

	require('connection.php');

	$sql = "SELECT * FROM persona WHERE arcanaName='Fool'";

	$show = mysqli_query($connect,$sql);

		if (mysqli_num_rows($show) >0) {
			while ($row = mysqli_fetch_assoc($show)) {
			extract($row);

			echo "<div id='blueimp-gallery' class='blueimp-gallery'>;

				<div id='links'>
				    <a href='images/$image' title='Banana' data-gallery>
				        <img src='images/$image'>
				    </a>
				</div>

				    <div class='slides'></div>
				    <h3 class='title'></h3>
				    <a class='prev'>‹</a>
				    <a class='next'>›</a>
				    <a class='close'>×</a>
				    <a class='play-pause'></a>
				    <ol class='indicator'></ol>

				</div>";
		}

		



				
		}






?>

<script src="js/blueimp-gallery.min.js"></script>


</body>
</html>