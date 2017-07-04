



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

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
      crossorigin="anonymous"></script>
       

    <!-- <link rel="stylesheet" type="text/css" href="lightbox/dist/css/lightbox.css"> -->

    <style type="text/css">
        body {
            background-color: black;
        }

        h2 {
            color: red;
            text-align: center;
        }

        span, p {
            color: white;
        }

        #description {
            display: none;
        }

        /* Paste this css to your style sheet file or under head tag */
        /* This only works with JavaScript, 
        if it's not present, don't show loader */
        /*.no-js #loader { 
            display: none;  
        }
        .js #loader { 
            display: block; 
            position: absolute; 
            left: 100px; 
            top: 0; 
        }

        .se-pre-con {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url(images/loading.gif) center no-repeat #fff;
        }*/

    </style>


</head>
<body>

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
                        <h2>$arcanaName</h2>
                        <a href='#'><span id=".$id." onclick='showDescription(this.id);'>Show</span></a>
                        <a href='#'><span id=".$id." onclick='hideDescription(this.id);'>Hide</span></a>

                        <p id='description".$id."'>$arcanaDescription</p>

                        <a href='new2.php'><p>Click here to see the list of Personas</p></a>
                    </div>
                </div>

                ";
                    
        }

    }

?>

    
         
    </div>

    <script type="text/javascript">

        $(document).ready(function() {
            var value = id;
            document.getElementById("description"+value).style.display = "none";
        }); //fix this

        function showDescription(id) {
            var value = id;
            document.getElementById("description"+value).style.display = "block";
        }

        function hideDescription(id) {
            var value = id;
            document.getElementById("description"+value).style.display = "none";
        }

         //paste this code under the head tag or in a separate js file.
        // Wait for window load
        
        
    </script>
    
    <!-- <script src="lightbox/dist/js/lightbox.js"></script> -->

       

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



</body>
</html>