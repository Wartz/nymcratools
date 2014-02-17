<?php include_once("include/config.php"); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="NYMCRA Control panel.">

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
                <?php 
                    $content = new Tools;
                    $content->menu();
                 ?>
            </ul>
        </div>
    </div>

    <div id="main">
        <div class="header">
            <h1>Tools and Utilities</h1>
            <h2>Post news, check members, update race results and points series</h2>
        </div>

        <div class="content">
            <p>
                <?php
                    $content->content();
                ?>
            </p>
        </div>
    </div>
</div>





<script src="js/ui.js"></script>


</body>
</html>
