<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $page_title;?></title>

	<meta name="description" content="<?php echo $meta_description;?>">
	<meta name="keywords" content="<?php echo $meta_keywords;?>">
	<meta name="author" content="<?php echo HOTEL_NAME;?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=no">

	<link rel="shortcut icon" href="<?php echo $this->config->item('images');?>/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php echo $this->config->item('images');?>/favicon.ico" type="image/x-icon">

	<link href='https://fonts.googleapis.com/css?family=Lobster%7cRaleway:400,300,100,600,700,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('css');?>styles.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('css');?>custom.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body class="homepage trans-header sticky white-datepicker">

	<!-- Top Header -->
	<div id="top-header">
		<div class="inner-container container">
			<!-- Contact Info -->
			<ul class="contact-info list-inline">
				<li><i class="fa fa-phone"></i>+91 22 2300 0846</li>
				<li><i class="fa fa-envelope"></i><a href="mailto:hkp.hotelkalpanapalace@gmail.com?Subject=Customer%20Inquiry">hkp.hotelkalpanapalace@gmail.com</a></li>
			</ul>

		</div>
	</div>
	<!-- End of Top Header -->

	<!-- Main Header -->
	<header id="main-header">
		<div class="inner-container container">
			<div class="left-sec col-sm-4 col-md-2 clearfix">
				<!-- Top Logo -->
				<div id="top-logo">
					<a href="<?php echo base_url(); ?>"><img id="logo_img" src="<?php echo $this->config->item('images').'logo.png'; ?>" class="ht100" ></a>
				</div>
			</div>
			<div class="right-sec col-sm-8 col-md-10 clearfix">

				<!-- Book Now -->
				<a href="<?php echo base_url('booking');?>" class="book-now-btn btn btn-default btn-sm">Book Now</a>

				<!-- Main Menu -->
				<nav id="main-menu">
					<ul class="list-inline">
						<li class="<?php echo $page_name == 'home' ? 'active' : '';?>"><a href="<?php echo base_url();?>">Home</a></li>
						<li class="<?php echo $page_name == 'about' ? 'active' : '';?>"><a href="<?php echo base_url('about');?>">About</a></li>
						<li class="<?php echo $page_name == 'rooms' ? 'active' : '';?>"><a href="<?php echo base_url('rooms');?>">Rooms</a></li>
						<li class="<?php echo $page_name == 'nearby' ? 'active' : '';?>"><a href="<?php echo base_url('nearby');?>">Nearby</a></li>
						<li class="<?php echo $page_name == 'gallery' ? 'active' : '';?>"><a href="<?php echo base_url('gallery');?>">Gallery</a></li>
						<!-- <li class="<?php echo $page_name == 'testimonials' ? 'active' : '';?>"><a href="<?php echo base_url('testimonials');?>">Testimonials</a></li> -->
						<li class="<?php echo $page_name == 'contact' ? 'active' : '';?>"><a href="<?php echo base_url('contact');?>">Contact</a></li>
					</ul>
				</nav>

				<!-- Menu Handel -->
				<div id="main-menu-handle" class="hidden-md hidden-lg"><i class="fa fa-bars"></i></div>
			</div>
		</div>
		<div id="mobile-menu-container" class="hidden-md hidden-lg"></div>
	</header>