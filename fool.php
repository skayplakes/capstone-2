<!DOCTYPE html>
<html>
<head>
	<title>List of Personas</title>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body class="allpersonas">

<?php

	require('connection.php');
	$sql = "SELECT * FROM persona";

	$show = mysqli_query($connect,$sql);

    	if (mysqli_num_rows($show) > 0) {

    		echo "<h1 class='title'>All personas</h1>

    		<div class='container-fluid'>
    			<div class='row'>
    				<div class='offset-md-2 col-md-8'>
    					<div class='row col-sm-4'>
				    		<a href='addpersona.php'>
							    <img src='images/addnew.png' class='img-responsive addbutton' />
							</a>
						</div>
					</div>
				</div>
			</div>";

    	while ($row = mysqli_fetch_assoc($show)) { 
          extract($row);
          	echo "
          		<div class='container-fluid'>
	          		<div class='row>
	          			<div class='offset-md-2 col-md-8>
	          				<div class='row col-sm-4'>
	          					<a href='update.php?id=$id'>
		          					<h1 class='personaname'>$name</h1>
		          				</a>
		          			</div>
		          		</div>
		          	</div>
		        </div>";

      		}
      	}

?>


<a href="loadingpage.php" class="backbutton">
    <img src="images/back1.png" class='img-responsive' />
</a>

<?php require('partials/footer.php'); ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>