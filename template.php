<!DOCTYPE html>
<html>
<head>
	<title></title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<style type="text/css">
		img {
			width: 200px;
			height: 200px;
		}

		.navbar-fixed-left {
		  width: 140px;
		  position: fixed;
		  border-radius: 0;
		  height: 100%;
		}

		.navbar-fixed-left .navbar-nav > li {
		  float: none;  /* Cancel default li float: left */
		  width: 139px;
		}

		.navbar-fixed-left + .container {
		  padding-left: 160px;
		}

		/* On using dropdown menu (To right shift popuped) */
		.navbar-fixed-left .navbar-nav > li > .dropdown-menu {
		  margin-top: -50px;
		  margin-left: 140px;
		}

		.col-centered{
		    float: none;
		    margin: 0 auto;
		}
	</style>
</head>
<body>

	<div class="navbar navbar-inverse navbar-fixed-left">
	  <a class="navbar-brand" href="#">Brand</a>
	  <ul class="nav navbar-nav">
	   <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
	     <ul class="dropdown-menu" role="menu">
	      <li><a href="#">Sub Menu1</a></li>
	      <li><a href="#">Sub Menu2</a></li>
	      <li><a href="#">Sub Menu3</a></li>
	      <li class="divider"></li>
	      <li><a href="#">Sub Menu4</a></li>
	      <li><a href="#">Sub Menu5</a></li>
	     </ul>
	   </li>
	   <li><a href="#">Link2</a></li>
	   <li><a href="#">Link3</a></li>
	   <li><a href="#">Link4</a></li>
	   <li><a href="#">Link5</a></li>
	  </ul>
	</div>
	<div class="container">
	 <div class="row">
	   <h2>Left side Navigation bar (Fixed)</h2>
	   
	   <p>Left side Navigation</p>
	 </div>
</div>

<div class="container">
	<div class="row">
		<div class="col-lg-1 col-centered">
			<img src="images/asd.svg">
		</div>
	</div>
</div>



	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>