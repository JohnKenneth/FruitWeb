<!DOCTYPE html>
<html lang="en">

<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

		<title>Healthy Crate</title>

		<!-- Bootstrap Core CSS -->
		<link type="text/css" type="text/css" href="css/bootstrap.min.css" rel="stylesheet" />
		
		<!-- BXSlider CSS -->
		<link type="text/css" href="css/jquery.bxslider.css" rel="stylesheet" />
		
		<!-- Slick CSS -->
		<link type="text/css" href="css/slick.css" rel="stylesheet" />

		<!-- Custom CSS -->
		<link type="text/css" href="css/style.css" rel="stylesheet" />

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
				<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
				<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery -->
		<script src="js/lib/jquery-1.9.1.min.js"></script>
		
		
        <?php include("ImportScripts.php"); ?>
		<script>
			$(document).ready(function() { 
				if(!isMobile()){
					$(window).scroll(function(){
						resizeNav();
					});
					$(window).bind("resize", resizeNav);
				}
			});
			function resizeNav(){
				var $nav = $('#navigation-bar');
				var $container = $('#navigation-bar div.navbar-header');
				var $logo = $('#navigation-bar a.navbar-brand > img');
				var windowWidth = $(window).width();
				var top = (document.documentElement && document.documentElement.scrollTop) || 
					  document.body.scrollTop;
				if (top > 0 && windowWidth > 768) {
					if ($nav.data('size') != 'small') {
						$nav.data('size','small').animate({
							height:'90px'
						}, 600);
						$container.animate({top:8}, 600);
						$logo.animate({height:95,width:120}, 600);
					}
				} 
				else if(windowWidth < 768){
					if ($nav.data('size') != 'mobile') {
						$nav.data('size','mobile').animate({
							height:'70px'
						}, 600);
						$container.animate({top:0}, 600);
						$logo.animate({height:70,width:90}, 600);
					}
				}
				else {
					if ($nav.data('size') != 'big') {
						$nav.data('size','big').animate({
							height:'140px'
						}, 600);
						$container.animate({top:30}, 600);
						$logo.animate({height:140,width:190}, 600);
					}  
				}
			}
		</script>
</head>

<body>
	
	<!-- Navigation -->
	<nav id="navigation-bar" role="navigation" class="navbar navbar-fixed-top navbar-inverse">
		<div class="container" >
			<a class="navbar-brand img-responsive" rel="home" href="Home" title="Healthy Crate">
				<img style="" src="images/healthy_crate_logo.png">
			</a>
			<div class="navbar-header col-sm-12">
				<div class="container-fluid">
					<button data-toggle="collapse-side" data-target=".side-collapse" data-target-2=".side-collapse-container" type="button" class="navbar-toggle pull-right">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="contact-detail">
						<div class="small top " style="color:#034f11;padding:0px">
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
				<div class="navbar-inverse side-collapse in">
					<nav role="navigation" class="navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="Home">Home</a></li>
							<li><a href="Services">Services</a></li>
							<li><a href="About">About</a></li>
							<li><a href="Products">Product</a></li>
							<li><a href="Contact">Contact</a></li>
							<!--<li class="dropdown"> 
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
								<ul class="dropdown-menu">
								   <li><a href="#">Action</a></li>
								   <li><a href="#">Another action</a></li>
								   <li><a href="#">Something else here</a></li>
								   <li class="divider"></li>
								   <li class="dropdown-header">Nav header</li>
								   <li><a href="#">Separated link</a></li>
								   <li><a href="#">One more separated link</a></li>
								   <li><a href="#">Action</a></li>
								   <li><a href="#">Another action</a></li>
								   <li><a href="#">Something else here</a></li>
								   <li class="divider"></li>
								   <li class="dropdown-header">Nav header</li>
								   <li><a href="#">Separated link</a></li>
								   <li><a href="#">One more separated link</a></li>
								   <li><a href="#">Action</a></li>
								   <li><a href="#">Another action</a></li>
								   <li><a href="#">Something else here</a></li>
								   <li class="divider"></li>
								   <li class="dropdown-header">Nav header</li>
								   <li><a href="#">Separated link test long title goes here</a></li>
								   <li><a href="#">One more separated link</a></li>
								</ul>
							</li>-->
						</ul>
					</nav>
				</div>
			</div>
		</div>
    </nav>

	<!-- /#Navigation -->