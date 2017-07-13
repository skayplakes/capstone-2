<!DOCTYPE html>
<html>
<head>
	<title>Arcanas</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
      crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body class="gradientcolor">

<?php

require_once('connection.php');
    $sql = "SELECT * FROM arcana";

    $show = mysqli_query($connect,$sql);

        if (mysqli_num_rows($show) > 0) {
        
        while ($row = mysqli_fetch_assoc($show)) {
            extract($row);
            echo "
                <div class='container'>
                    <div class='row col-sm-4'>
                        <img class='img-responsive' src='images/$arcanaImage'>
                    </div>
                    <div class='row col-sm-8'>
                        <h2 class='arcananame'>$arcanaName</h2>
                        <button type='button' class='btn btn-default' data-toggle='collapse' data-target='#description".$id."'>Description</button>".'<br>'."
                            <p id='description".$id."' class='collapse'>$arcanaDescription</p>

                            ".'<br>'."";

                            echo '<a href="new2.php?category='.$arcanaName.'"><p>Click here to see the list of Personas from the '.$arcanaName.' arcana</p></a>
                    </div>
                </div>';              
        }
    }

?>

<a href="loadingpage.php" class="backbutton">
    <img src="images/back1.png" class='img-responsive' />
</a>

<?php require('partials/footer.php'); ?>
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>