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

	<style type="text/css">

	/* ============================================================
	  GLOBAL
	============================================================ */
	.effects {
	  padding-left: 15px;
	}
	.effects .img {
	  position: relative;
	  float: left;
	  margin-bottom: 5px;
	  width: 25%;
	  overflow: hidden;
	}
	.effects .img:nth-child(n) {
	  margin-right: 5px;
	}
	.effects .img:first-child {
	  margin-left: -15px;
	}
	.effects .img:last-child {
	  margin-right: 0;
	}
	.effects .img img {
	  display: block;
	  margin: 0;
	  padding: 0;
	  max-width: 100%;
	  height: auto;
	}

	.overlay {
	  display: block;
	  position: absolute;
	  z-index: 20;
	  background: rgba(0, 0, 0, 0.8);
	  overflow: hidden;
	  transition: all 0.5s;
	  opacity: 0.5; /*opacity of transition overlay*/
	}

	a.close-overlay {
	  display: block;
	  position: absolute;
	  top: 0;
	  right: 0;
	  z-index: 100;
	  width: 45px;
	  height: 45px;
	  font-size: 20px;
	  font-weight: 700;
	  color: #fff;
	  line-height: 45px;
	  text-align: center;
	  background-color: #000;
	  cursor: pointer;
	}
	a.close-overlay.hidden {
	  display: none;
	}

	a.expand {
	  display: block;
	  position: absolute;
	  z-index: 100;
	  width: 60px;
	  height: 60px;
	  border: solid 5px #fff;
	  text-align: center;
	  color: #fff;
	  line-height: 50px;
	  font-weight: 700;
	  font-size: 30px;
	  border-radius: 30px;
	}

	/* ============================================================
	  EFFECT 5 - ICON BORDER ANIMATE
	============================================================ */
	#effect-5 .overlay {
	  top: 0;
	  bottom: 0;
	  left: 0;
	  right: 0;
	  opacity: 0;
	}
	#effect-5 .overlay a.expand {
	  top: 0;
	  bottom: 0;
	  left: 0;
	  right: 0;
	  margin: auto;
	  width: 100%;
	  height: 100%;
	  -webkit-border-radius: 0;
	  -moz-border-radius: 0;
	  -ms-border-radius: 0;
	  -o-border-radius: 0;
	  border-radius: 0;
	  -webkit-transition: all 0.5s;
	  -moz-transition: all 0.5s;
	  -o-transition: all 0.5s;
	  transition: all 0.5s;
	}
	#effect-5 .img.hover .overlay {
	  opacity: 1;
	}
	#effect-5 .img.hover .overlay a.expand {
	  width: 60px;
	  height: 60px;
	  -webkit-border-radius: 30px;
	  -moz-border-radius: 30px;
	  -ms-border-radius: 30px;
	  -o-border-radius: 30px;
	  border-radius: 30px;
	}



	body {
	    background-image: url(images/qwe.jpg);
	    color: black;
	    background-repeat: no-repeat;
	    background-position: center center;
	    background-attachment: fixed;
	    background-size: cover;

    }
			/*img {
				width: 200px;
				height: 200px;
			}*/

			/*.container {
			    position: relative;
			    width: 50%;
			}

			.image {
			  opacity: 1;
			  display: block;
			  width: 100%;
			  height: auto;
			  transition: .5s ease;
			  backface-visibility: hidden;
			}

			.middle {
			  transition: .5s ease;
			  opacity: 0;
			  position: absolute;
			  top: 50%;
			  left: 50%;
			  transform: translate(-50%, -50%);
			  -ms-transform: translate(-50%, -50%)
			}

			.container:hover .image {
			  opacity: 0.3;
			}

			.container:hover .middle {
			  opacity: 1;
			}*/

			/*.text {
				background-color: black;
				color: red;*/

			  /*background-color: #4CAF50;
			  color: white;*/

	/*		  font-size: 16px;
			  padding: 16px 32px;
			  font-family: 'Permanent Marker', cursive;
			}*/


		

	</style>

</head>

<body>

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