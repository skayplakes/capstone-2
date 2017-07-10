<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="styles.css">

</head>

<body class="category">

<?php

	require('connection.php');

	$arcanaId = $_GET['category'];

	$sql = "SELECT * FROM persona WHERE arcanaName='$arcanaId'";

	$show = mysqli_query($connect,$sql);

    	if (mysqli_num_rows($show) > 0) {
    	
    	while ($row = mysqli_fetch_assoc($show)) { 
          extract($row);

          	echo "
          			<div class='container'>
		          		<div class='row'>	
		          			<div id='effect-5' class='effects clearfix'>
							    <div class='img'>
							        <img src='images/$image' alt='personaimages'>
							        <div class='overlay'>
							            <a href='update.php?id=$id' class='expand'>+</a>
							            <a class='close-overlay hidden'>x</a>
							        </div>
							    </div>
							</div>

						</div>
					</div>";
				    

      		}
      	}

		

?>
	
	<script src="modernizr.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<script type="text/javascript">
		$(document).ready(function(){
		    if (Modernizr.touch) {
		        // show the close overlay button
		        $(".close-overlay").removeClass("hidden");
		        // handle the adding of hover class when clicked
		        $(".img").click(function(e){
		            if (!$(this).hasClass("hover")) {
		                $(this).addClass("hover");
		            }
		        });
		        // handle the closing of the overlay
		        $(".close-overlay").click(function(e){
		            e.preventDefault();
		            e.stopPropagation();
		            if ($(this).closest(".img").hasClass("hover")) {
		                $(this).closest(".img").removeClass("hover");
		            }
		        });
		    } else {
		        // handle the mouseenter functionality
		        $(".img").mouseenter(function(){
		            $(this).addClass("hover");
		        })
		        // handle the mouseleave functionality
		        .mouseleave(function(){
		            $(this).removeClass("hover");
		        });
		    }
		});
	</script>

</body>
</html>