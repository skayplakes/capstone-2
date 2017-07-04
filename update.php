<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

require_once('connection.php');

$arcanaId = $_GET['id'];

$sql = "SELECT * FROM persona WHERE id='$arcanaId'";

  $show = mysqli_query($connect,$sql);

        if (mysqli_num_rows($show) > 0) {

        	while ($row = mysqli_fetch_assoc($show)) {
            extract($row);

            echo $name;
            echo "<br>";
            echo $description;

           }
        }


?>

</body>
</html>