



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

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style type="text/css">
    </style>

</head>
<body>

<div class="container">
    <div class="col-md-2 row">
        <ul class="nav nav-pills nav-stacked">
          <li role="presentation" class="active"><a href="#">Fool</a></li>
          <li role="presentation"><a href="#">Magician</a></li>
          <li role="presentation"><a href="#">Priestess</a></li>
          <li role="presentation"><a href="#">Empress</a></li>
          <li role="presentation"><a href="#">Emperor</a></li>
          <li role="presentation"><a href="#">Hierophant</a></li>
          <li role="presentation"><a href="#">Lovers</a></li>
          <li role="presentation"><a href="#">Chariot</a></li>
          <li role="presentation"><a href="#">Justice</a></li>
          <li role="presentation"><a href="#">Hermit</a></li>
          <li role="presentation"><a href="#">Fortune</a></li>
          <li role="presentation"><a href="#">Strength</a></li>
          <li role="presentation"><a href="#">Hanged Man</a></li>
          <li role="presentation"><a href="#">Death</a></li>
          <li role="presentation"><a href="#">Temperance</a></li>
          <li role="presentation"><a href="#">Devil</a></li>
          <li role="presentation"><a href="#">Tower</a></li>
          <li role="presentation"><a href="#">Star</a></li>
          <li role="presentation"><a href="#">Moon</a></li>
          <li role="presentation"><a href="#">Sun</a></li>
          <li role="presentation"><a href="#">Judgement</a></li>
          <li role="presentation"><a href="#">World</a></li>
        </ul>
    </div>
</div>


<?php

require_once('connection.php');
    $sql = "SELECT * FROM arcana";

    $show = mysqli_query($connect,$sql);

        if (mysqli_num_rows($show) > 0) {
            echo "
                <div class='container'>";
        

        while ($row = mysqli_fetch_assoc($show)) {
            extract($row);
            echo "
                <div class='row'>
                    <div class='row col-md-offset-4'>
                        <img src='images/$arcanaImage'>
                    </div>
                    <div class='row col-md-offset-4'>
                        <p>$arcanaDescription</p>
                    </div>
                </div>";
        }

        echo "</div>";
    }

?>

    
         
    </div>

    
       








<!-- <div id="layout">
    <a href="#menu" id="menuLink" class="menu-link">
        <span></span>
    </a>

    <div id="menu">
        <div class="pure-menu">

            <a class="pure-menu-heading" href="#">Arcanas</a>

            <ul class="pure-menu-list">
                <li class="pure-menu-item pure-menu-selected"><a href="#" class="pure-menu-link">Fool</a>
                	<ul class="pure-menu-children">
		                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Orpheus</a></li>
		                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Legion</a></li>
		                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Arsene</a></li>
		            </ul>
		        </li>

                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Magician</a></li>

                <li class="pure-menu-item" class="menu-item-divided pure-menu-selected">
                    <a href="#" class="pure-menu-link">Priestess</a>
                </li>

                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Empress</a></li>
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Emperor</a></li>
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Hierophant</a></li>

                <li class="pure-menu-item" class="menu-item-divided pure-menu-selected">
                    <a href="#" class="pure-menu-link">Lovers</a>
                </li>

                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Chariot</a></li>
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Justice</a></li>
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Hermit</a></li>

                <li class="pure-menu-item" class="menu-item-divided pure-menu-selected">
                    <a href="#" class="pure-menu-link">Fortune</a>
                </li>

                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Strength</a></li>
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Hanged Man</a></li>
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Death</a></li>

                <li class="pure-menu-item" class="menu-item-divided pure-menu-selected">
                    <a href="#" class="pure-menu-link">Temperance</a>
                </li>

                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Devil</a></li>

                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Tower</a></li>
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Star</a></li>

                <li class="pure-menu-item" class="menu-item-divided pure-menu-selected">
                    <a href="#" class="pure-menu-link">Moon</a>
                </li>

                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Sun</a></li>

                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Judgement</a></li>

                <li class="pure-menu-item" class="menu-item-divided pure-menu-selected">
                    <a href="#" class="pure-menu-link">World</a>
                </li>
            </ul>
        </div>
    </div>

    <div id="main">
        <div class="header">
            <h1>Page Title</h1>
            <h2>A subtitle for your page goes here</h2>
        </div>

        <div class="content pure-g">
            <div class="photo-box pure-u-1-2 pure-u-md-1-2 pure-u-lg-1-3">
                <img class="pure-img" src="images/magician.png">
            </div>

            <div class="pure-u-1-2">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>

        </div>

        <div class="content">
            <div class="photo-box pure-u-1-1 pure-u-md-1-2 pure-u-lg-1-3">
                <img class="pure-img img-centered" src="images/magician.png">
            </div>
        </div> -->

        <!-- <div class="content">
            <h2 class="content-subhead">How to use this layout</h2>
            <p>
                To use this layout, you can just copy paste the HTML, along with the CSS in <a href="/css/layouts/side-menu.css" alt="Side Menu CSS">side-menu.css</a>, and the JavaScript in <a href="/js/ui.js">ui.js</a>. The JS file uses vanilla JavaScript to simply toggle an <code>active</code> class that makes the menu responsive.
            </p>

            <h2 class="content-subhead">Now Let's Speak Some Latin</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>

            <div class="pure-g">
                <div class="pure-u-1-4">
                    <img class="pure-img-responsive" src="http://farm3.staticflickr.com/2875/9069037713_1752f5daeb.jpg" alt="Peyto Lake">
                </div>
                <div class="pure-u-1-4">
                    <img class="pure-img-responsive" src="http://farm3.staticflickr.com/2813/9069585985_80da8db54f.jpg" alt="Train">
                </div>
                <div class="pure-u-1-4">
                    <img class="pure-img-responsive" src="http://farm6.staticflickr.com/5456/9121446012_c1640e42d0.jpg" alt="T-Shirt Store">
                </div>
                <div class="pure-u-1-4">
                    <img class="pure-img-responsive" src="http://farm8.staticflickr.com/7357/9086701425_fda3024927.jpg" alt="Mountain">
                </div>
            </div>

            <h2 class="content-subhead">Try Resizing your Browser</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div> -->
<!--     </div>
</div>
 -->



<!-- <script src="js/ui.js"></script> -->
<!-- <script src="js/menus.js"></script> -->

</body>
</html>