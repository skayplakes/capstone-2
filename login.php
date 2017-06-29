<?php
session_start();

	if (isset($_POST))

	if (isset($_POST['login'])) {
		require_once 'connection.php';
		$username = $_POST['username'];
		$password = sha1($_POST['password']);
		$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

		$result = mysqli_query($connect,$sql);
		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				extract($row);
				$_SESSION['message'] = "Login Successful";
				$_SESSION['username'] = $username;
				$_SESSION['role'] = $role;

				header('location: persona.php');
			}
		}
	}


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">

    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css">

    <style type="text/css">
        
        body {
            background-color: red;
            color: white;
        }

      /*  img {
            width: 100%;
        }*/
    </style>
</head>



<body>

<div class="content pure-g">
    <div class="photo-box pure-u-12-1">
        <img class="pure-img" src="images/asd.svg">
    </div>

    <div class="pure-u-1-1">
        <form class="pure-form pure-form-aligned">
            <fieldset>
                <div class="pure-control-group">
                    <label for="name">Username</label>
                    <input id="name" type="text" placeholder="Username">
                    <span class="pure-form-message-inline">This is a required field.</span>
                </div>

                <div class="pure-control-group">
                    <label for="password">Password</label>
                    <input id="password" type="password" placeholder="Password">
                </div>

                <div class="pure-control-group">
                    <label for="email">Email Address</label>
                    <input id="email" type="email" placeholder="Email Address">
                </div>

                <div class="pure-control-group">
                    <label for="foo">Supercalifragilistic Label</label>
                    <input id="foo" type="text" placeholder="Enter something here...">
                </div>

                <div class="pure-controls">
                    <label for="cb" class="pure-checkbox">
                        <input id="cb" type="checkbox"> I've read the terms and conditions
                    </label>

                    <button type="submit" class="pure-button pure-button-primary">Submit</button>
                </div>
            </fieldset>
        </form>
    </div>



</div>




<!-- 
<form class="pure-form pure-form-aligned">

    <fieldset>
        <div class="pure-control-group">
            <label for="name">Username</label>
            <input id="name" type="text" placeholder="Username">
            <span class="pure-form-message-inline">This is a required field.</span>
        </div>

        <div class="pure-control-group">
            <label for="password">Password</label>
            <input id="password" type="password" placeholder="Password">
        </div>

        <div class="pure-control-group">
            <label for="email">Email Address</label>
            <input id="email" type="email" placeholder="Email Address">
        </div>

        <div class="pure-control-group">
            <label for="foo">Supercalifragilistic Label</label>
            <input id="foo" type="text" placeholder="Enter something here...">
        </div>

        <div class="pure-controls">
            <label for="cb" class="pure-checkbox">
                <input id="cb" type="checkbox"> I've read the terms and conditions
            </label>

            <button type="submit" class="pure-button pure-button-primary">Submit</button>
        </div>
    </fieldset>
</form>
 -->
		



</body>
</html>