<!DOCTYPE html>
<html>
<head>
	<title>SITA</title>
	<!-- Meta tab section -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Link to External css file -->
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" type="text/css" href="css/body.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-progressbar-3.3.4.css">
	<link rel="stylesheet" type="text/css" href="css/webdev.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
	<link href="https://fonts.googleapis.com/css?family=Play:700|Roboto:500,500i" rel="stylesheet">
</head>
<?php 
	error_reporting(E_ALL & ~E_NOTICE);
	$pg = isset($_GET['page']) ? $_GET['page'] : '';

	$allow = array('index.php', 'stories.php', 'solution.php','sfdev.php','webdev.php','host.php','about.php');
	if ( !in_array($pg, $allow) ) {
	    $pg = 'index.php';
	}

?>

<body>
	<div class="container">				
		<nav class="navbar nav navbar-default">
			<div class="navbar-header">
				<button  type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="navbar-brand">
					<a href="index.php"><img src="img/logo.png" class="img-responsive"> <h2>Soft IT Asia Co., Ltd.</h2></a>
				</div>
				<div class="toplink">
					<ul class="top_nav"> 
						<li><a href=""><span><i class="fa fa-facebook-square " aria-hidden="true"></i></span></a></li>
						<li><a href=""><span><i class="fa fa-twitter-square" aria-hidden="true"></i></span></a></li>
						<li><a href=""><span><i class="fa fa-google-plus-square " aria-hidden="true"></i></span></a></li>
						<li><a href=""><span><i class="fa fa-vimeo-square" aria-hidden="true"></i></span></a></li>
					</ul>
				</div>
			</div>
			<div style="clear:both;"></div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-left">
					<li  class="<?php if($pg == 'index.php'){echo 'active';} ?>"><a href="index.php?page=index.php">Home</a></li>
					<li class="<?php if($pg == 'stories.php'){echo 'active';} ?>"><a href="stories.php?page=stories.php">Customers Stories</a></li>
					<li class="<?php if($pg == 'solution.php'){echo 'active';} ?>"><a href="solution.php?page=solution.php">SErvice</a></li>
					<li class="<?php if($pg == 'sfdev.php'){echo 'active';} ?>"><a href="sfdev.php?page=sfdev.php">Software Development</a></li>
					<li class="<?php if($pg == 'webdev.php'){echo 'active';} ?>"><a href="webdev.php?page=webdev.php">Web Developement</a></li>
					<li class="<?php if($pg == 'host.php'){echo 'active';} ?>"><a href="host.php?page=host.php">Hosting</a></li>
					<li class="<?php if($pg == 'about.php'){echo 'active';} ?>"><a href="about.php?page=about.php">About Us</a></li>
					<li class="hidden-a"><a href=""><span><i class="fa fa-facebook-square " aria-hidden="true"></i></span></a></li>
					<li class="hidden-a"><a href=""><span><i class="fa fa-twitter-square" aria-hidden="true"></i></span></a></li>
					<li class="hidden-a"><a href=""><span><i class="fa  fa-google-plus-square " aria-hidden="true"></i></span></a></li>
					<li class="hidden-a"><a href=""><span><i class="fa fa-vimeo-square" aria-hidden="true"></i></span></a></li>
					<li>
						<form>
							<input type="text" name="search" placeholder="Search..">
						</form>
					</li>
				</ul>
			</div>
		</nav>
		<div style="clear:both;"></div>

		