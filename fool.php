<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">






	<style type="text/css">

		body, html {
			background-image: url(images/list.jpg);
			background-repeat:no-repeat;
			background-position: center center;
			background-attachment: fixed;
			background-size: cover;

/*			background-size:cover;
			background-position:center;*/ 

			/*check this for responsiveness */

		}

		html { 
		  /*background: url("images/background.png") no-repeat center center fixed; */
		  
		}
/*		img {
			width: 200px;
			height: 200px;
		}

*/		
		h1 {
			color: black;
			font-family: 'Permanent Marker', cursive;
		}

	</style>

	



</head>
<body>

<?php

	echo "<div class='bg'></div>";

	require_once('connection.php');
	$sql = "SELECT * FROM persona";

	$show = mysqli_query($connect,$sql);

    	if (mysqli_num_rows($show) > 0) {
    	
    	while ($row = mysqli_fetch_assoc($show)) { 
          extract($row);
          	echo "
          		<div class='container-fluid'>
	          		<div class='row>
	          			<div class='offset-md-2 col-md-8>
	          				<div class='row col-sm-4'>
	          					<a href='update.php?id=$id'>
		          					<h1>$name</h1>
		          				</a>
		          			</div>
		          		</div>
		          	</div>
		        </div>";

      		}
      	}



?>



	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	</script>

</body>
</html>