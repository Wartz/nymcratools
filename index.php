<?php include_once("include/config.php"); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">

    <title>NYMCRA &ndash; Tools</title>

    






<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure.css">



  
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/layouts/side-menu-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="css/layouts/side-menu.css">
    <!--<![endif]-->
  





    

</head>
<body>






<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    <div id="menu">
        <div class="pure-menu pure-menu-open">
            <a class="pure-menu-heading" href="#">NYMCRA Tools</a>

            <ul>
            	<li> <!-- class="menu-item-divided pure-menu-selected" -->
                    <a href="#">Post News</a>
                </li>
                <li><a href="members.php">Members</a></li>
                <li><a href="#">Race Results</a></li>
                <li><a href="#">Points Series</a></li>
            </ul>
        </div>
    </div>

    <div id="main">
        <div class="header">
            <h1>Tools and Utilities</h1>
            <h2>Post news, check members, update race results and points series</h2>
        </div>

        <div class="content">
            <p>content</p>
        </div>
    </div>
</div>





<script src="js/ui.js"></script>


</body>
</html>
