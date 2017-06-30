<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="modern-slide-in/css/sequence-theme.modern-slide-in.css" />

	<link rel="stylesheet" type="text/css" href="modern-slide-in/css/sequence-theme.modern-slide-in">
</head>
<body>

<?php

  require('connection.php');
    $sql = "SELECT * FROM persona WHERE arcanaName='Fool'";

  $show = mysqli_query($connect,$sql);

    if (mysqli_num_rows($show) > 0) {
      echo "<div id='sequence' class='seq'>

              <div class='seq-screen'>
                <ul class='seq-canvas'>";
                
      while ($row = mysqli_fetch_assoc($show)) { 
        extract($row);

        echo "
              <li class='seq-in'>
                <div class='seq-model'>
                  <img data-seq src='images/$image' alt='Orpheus' />
                </div>

                <div class='seq-title'>
                  <h2 data-seq>$name</h2>
                  <h3 data-seq>$description</h3>

                </div>
              </li>
              
              ";           
      }
        echo "
              </ul>
            </div>

            <fieldset class='seq-nav' aria-controls='sequence' aria-label='Slider buttons'>
              <button type='button' class='seq-prev' aria-label='Previous'>Previous</button>
              <button type='button' class='seq-next' aria-label='Next'>Next</button>
            </fieldset>

            <ul role='navigation' aria-label='Pagination' class='seq-pagination'>
                <li><a href='#step1' rel='step1' title='Go to slide 1'><img style='width: 50px;' src='images/orphicon.svg'/></a></li>
                 
                <li><a href='#step2' rel='step2' title='Go to slide 2'><img style='width: 50px;' src='images/Slime.jpg' /></a></li>
                <li><a href='#step3' rel='step3' title='Go to slide 3'><img style='width: 50px;' src='images/legionfool.svg' /></a></li>
                <li><a href='#step4' rel='step4' title='Go to slide 4'><img style='width: 50px;' src='images/ose.jpg' /></a></li>
              </ul>
        </div>";
    }


?>


<script src="modern-slide-in/scripts/imagesloaded.pkgd.min.js"></script>
<script src="modern-slide-in/scripts/hammer.min.js"></script>
<script src="modern-slide-in/scripts/sequence.min.js"></script>
<script src="modern-slide-in/scripts/sequence-theme.modern-slide-in.js"></script>

</body>
</html>