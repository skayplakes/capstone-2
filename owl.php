

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="assets/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/owl.theme.default.css">

</head>
<body>

<?php

require('connection.php');
  
  $sql = "SELECT * FROM persona WHERE arcanaName='Fool'";

  $show = mysqli_query($connect,$sql);

    if (mysqli_num_rows($show) > 0) {
      echo "<div class='owl-carousel owl-theme'>";
                
      while ($row = mysqli_fetch_assoc($show)) { 
          extract($row);

          echo "<div class='item data-hash='zero>
                  <img src='images/$image'></div>
                <div class='item data-hash='one><h4>2</h4></div>
                <div class='item' data-hash='two'><h4>3</h4></div>
                <div class='item' data-hash='three'><h4>4</h4></div>
                <div class='item'><h4>5</h4></div>
                <div class='item'><h4>6</h4></div>
                <div class='item'><h4>7</h4></div>
                <div class='item'><h4>8</h4></div>
                <div class='item'><h4>9</h4></div>
                <div class='item'><h4>10</h4></div>
                <div class='item'><h4>11</h4></div>
                <div class='item'><h4>12</h4></div>";
        
        }
        

        echo "
          <div class='container'>
            <div class='row'>
              <div class='col-xs-8'> 

                <a href='addpersona.php'><button class='btn btn-default btn-md'>Add Persona</button></a>

                <a href='edit.php?id=$id'><button class='btn btn-default btn-md'>Edit</button></a>

                <a href='delete.php?id=$id'><button class='btn btn-danger btn-md'>Delete</button></a>
              </div>
            </div>
          </div>";
    }




?>



   
</div>

	  <a class="button secondary url" href="#zero">zero</a> 
      <a class="button secondary url" href="#three">three</a> 
      <a class="button secondary url" href="#five">five</a> 
      <a class="button secondary url" href="#seven">seven</a> 
      <a class="button secondary url" href="#ten">ten</a> 



	<script src="jquery-3.2.1.min.js"></script>
	<script src="owl.carousel.min.js"></script>

	<script type="text/javascript">
		$('.owl-carousel').owlCarousel({
		    loop:false,
		    center:true,
		    margin:10,
		    URLhashListener:true,
		    autoplayHoverPause:true,
		    startPosition: 'data-hash=zero',
		    responsiveClass:true,
		    responsive:{
		        0:{
		            items:1,
		            nav:true
		        },
		        600:{
		            items:3,
		            nav:false
		        },
		        1000:{
		            items:5,
		            nav:true,
		            loop:false
		        }
		    }
		});
	</script>


</body>
</html>