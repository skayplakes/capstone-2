<?php



?>




<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/layouts/side-menu.css">

</head>
<body>

<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
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

        <div class="content">
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
        </div>
    </div>
</div>




<script src="js/ui.js"></script>
<script src="js/menus.js"></script>

</body>
</html>