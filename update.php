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

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">

	<style type="text/css">
		body, html {
			background-image: url(images/asd.jpg);
			background-repeat: no-repeat;
			background-position: center center;
			background-attachment: fixed;
			background-size: cover;

		}
	
		h1 {
			color: black;
			font-family: 'Permanent Marker', cursive;
		}

		.modal-body {
			color: black;
		}

		.modal-title {
			color: black;
			text-align: center;
		}
  
  		.personaimage {
		  position: relative;
		  float: right;
		  margin-bottom: 5px;
		  width: 25%;
		  overflow: hidden;
		  top: 275px;
		}

		.buttonimage {
			color: white;
			font-family: 'Permanent Marker', cursive;
			width: 16%; /*clickable area of description*/
			position: fixed;
			top: 400px;
		}

	</style>
</head>
<body>

<?php

session_start();

require('connection.php');

$arcanaId = $_GET['id'];

$sql = "SELECT * FROM persona WHERE id='$arcanaId'";

  $show = mysqli_query($connect,$sql);

        if (mysqli_num_rows($show) > 0) {

        	while ($row = mysqli_fetch_assoc($show)) {
            extract($row);

            echo "
            	<div class='container'>
	            	<img class='personaimage img-responsive' src='images/$image'>
            	</div>";
            echo "
            	<div class='container'>
            		<a href='#'><h1 class='buttonimage' data-toggle='modal' data-target='#myModal'>Description</h1></a>
            	</div>
            		<div class='modal fade' id='myModal' role='dialog'>
					    <div class='modal-dialog'>
					    
					      <!-- Modal content-->
					      <div class='modal-content'>
					        <div class='modal-header'>
					          <button type='button' class='close' data-dismiss='modal'>&times;</button>
					          <h4 class='modal-title'>$name</h4>
					        </div>
					        <div class='modal-body'>
					          <p>$description</p>
					        </div>

					        <div class='modal-footer'>
					        <a href='edit.php?id=$id'><button class='btn btn-default btn-md'>Edit</button></a>";
					        
							if ($_SESSION['role'] == 'admin') {
						    	echo "<a href='delete.php?id=$id'><button class='btn btn-danger btn-md delete'>Delete</button></a>";
						    } //to make delete button appear if role=admin

						echo "
					          <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
					        </div>
					      </div>
					      
					    </div>
					  </div>
					  ";
           }
        }

?>

<?php
	// require('connection.php');

	// $sql = "SELECT * FROM persona_stats WHERE id='3'";

	// $show = mysqli_query($connect,$sql);

	// if (mysqli_num_rows($show) > 0) {

	// 	while ($row = mysqli_fetch_assoc($show)) {
 //            extract($row);

 //            echo $strongAgainst;

            

 //        }
	// }



?>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>