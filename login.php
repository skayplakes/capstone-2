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

    <link rel="stylesheet" type="text/css" href="login/css/style.css">

    <link rel="stylesheet" type="text/css" href="styles.css">


</head>



<body class='login'>

  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <img src="images/asd.png" class="img-center center-block img-responsive">
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <!-- <img src="images/compendiumedit.png" class="img-center center-block img-responsive"> -->
      <h1 class="bannerimage">Compendium</h1>
    </div>
  </div>




<?php

session_start();

  if (isset($_POST['register'])) {
    require 'connection.php';
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pw1 = $_POST['pw1'];
    $pw1_2 = $_POST['pw1_2'];

    if($pw1 == $pw1_2) {
    $pw1 = sha1($pw1);
    $sql = "INSERT INTO users (first_name, last_name, username, password, email, role) VALUES ('$first_name', '$last_name', '$username', '$pw1', '$email','user')";
    mysqli_query($connect,$sql);

    echo "<script type='text/javascript'>alert('Registered successfully!')</script>";

  }
}

  if (isset($_POST['login'])) {
    require 'connection.php';
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

        if ($sql == true) {
          echo "<script type='text/javascript'>alert('Login successful!');
          window.location.href='loadingpage.php';
          </script>"; /*to generate an alert box and to redirect if successful*/
          
        } 
      }
    } else {
          echo "<script type='text/javascript'>alert('failed!')</script>";
        } 

  }



?>

<!--LOGIN FORM-->
  <div class="form">
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1 class="logintext">Forge a Contract!</h1>
          
          <form action="" method="POST">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="first_name" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name="last_name" />
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Username<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off" name="username" />
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name="email" />
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="pw1" />
          </div>

          <div class="field-wrap">
            <label>
              Confirm Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="pw1_2" />
          </div>
          
          <button type="submit" class="button button-block" name="register" />Sign on the contract!</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1 class="logintext">Welcome Back!</h1>
          
          <form action="" method="POST">
          
            <div class="field-wrap">
            <label>
              Username<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off" name="username" />
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="password" />
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block" name="login" />Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
  </div>

<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="login/js/index.js"></script>





</body>
</html>