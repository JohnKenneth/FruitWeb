<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>Healthy Crate</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/navbar.css" rel="stylesheet">
        <style>
            /* Note: Try to remove the following lines to see the effect of CSS positioning */
            .affix {
                top: 0;
                width: 100%;
            }
        </style>

        <!-- SCRIPTS -->
        <?php include("ImportScripts.php"); ?>
    </head>

    <body>
        <div class = "navbar-wrapper ">
            <div class="">
                <!-- <div class="container-fluid top" style="background-color:#F44336;color:#fff; height:60px;">
                   <div class="container-fluid navbar-collapse collapse" style="max-width: 1400px;">
                       <h3>Bootstrap Affix Example</h3>
                       <h3>Fixed (sticky) navbar on scroll</h3>
                       <p>Scroll this page to see how the navbar behaves with data-spy="affix".</p>
                       <p>The navbar is attached to the top of the page after you have scrolled a specified amount of pixels.</p>
                   </div>
               </div> -->  
                <!-- Static Top navbar -->
                <nav class="navbar navbar-static-top" > <!--data-spy="affix" data-offset-top="180">-->
                    <a class="navbar-brand img-responsive" rel="home" href="Home" title="Healthy Crate">
                        <img style="" src="images/healthy_crate_logo.png">
                    </a>
                    <div class="container" >
                        <div class="small top row" style="color:#034f11;padding:0px">

                            <div class="col-md-12">

                                <a href="#">
                                    <img class="accountLogo" src="images/lindedinLogo.png" />
                                </a>
                                <a href="#">
                                    <img class="accountLogo" src="images/TwitterLogo.png" />
                                </a>
                                <a href="#">
                                    <img class="accountLogo" src="images/FacebookLogo.png" />
                                </a>
                                <div class="contactInfo" style="float:right; margin-right:8px;">
                                    09123123123123 <br/>
                                    asdadasdass@gmail.com
                                </div><img class="accountLogo"src="images/contact.png" />
                            </div>
                        </div>
                    </div>
                    <div class="mainNav navbar-default container-fluid" >
                        
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <!--<a class="navbar-brand" href="#">Healthy Crate</a>-->

<!--<p class="navbar-text navbar-collapse collapse">Signed in as Mark Otto</p>-->
                            </div>
                        <div class="container" >
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right ">
                                    <li class="<?php echo $loc == "Home" ? "active" : ""; ?>"><a href="Home">Home</a></li>
                                    <li class="<?php echo $loc == "Service" ? "active" : ""; ?> dropdown">
                                        <a href="Services" class="<?php echo $loc == "Home" ? "active" : ""; ?> dropdown-hover"> <!--data-hover="dropdown"-->Services<!--<span class="caret"></span>--></a>
                                        <!--<ul class="dropdown-menu">
                                            <li><a href="Services?p=Delivery">Delivery</a></li>
                                            <li><a href="Services?p=DailyFruits">Daily Fruits</a></li>
                                        </ul>-->
                                    </li>
                                    <li class="<?php echo $loc == "Products" ? "active" : ""; ?>"><a href="Products">Products</a></li>
                                    <li class="<?php echo $loc == "About" ? "active" : ""; ?>"><a href="About">About Us</a></li>
                                    <li class="<?php echo $loc == "Contact" ? "active" : ""; ?>"><a href="Contact">Contact Us</a></li>

                                    <!-- Drop Down Sample
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li class="dropdown-header">Nav header</li>
                                            <li><a href="#">Separated link</a></li>
                                            <li><a href="#">One more separated link</a></li>
                                        </ul>
                                    </li>-->
                                </ul>
                            </div><!--/.nav-collapse -->
                        </div><!--/.container-fluid -->
                    </div>
                </nav>
            </div>
            <!-- Main component for a primary marketing message or call to action 
            <div class="jumbotron">
                <h1>Navbar example</h1>
                <p>This example is a quick exercise to illustrate how the default, static navbar and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
                <p>
                    <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View navbar docs &raquo;</a>
                </p>
            </div>-->
        </div>


