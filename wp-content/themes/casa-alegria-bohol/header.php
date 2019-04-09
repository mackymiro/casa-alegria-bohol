<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<?php	$slug = basename(get_permalink()); ?>
<title>

	<?php if($slug == "about-us"): ?>
		About Us | Casa Alegria-Bohol
	<?php elseif($slug == "activities"): ?>
		Activities | Casa Alegria-Bohol
	<?php elseif($slug == "aminities"): ?>
		Aminities | Casa Alegria-Bohol
	<?php elseif($slug == "family-fun"): ?>
		Family Fun | Casa Alegria-Bohol
	<?php elseif($slug == "testimonials"): ?>
		Testimonials | Casa Alegria-Bohol
	<?php elseif($slug == "house-rules"): ?>
		House Rules | Casa Alegria-Bohol
	<?php elseif($slug == "gallery2"): ?>
	    Gallery | Casa Alegria-Bohol
	<?php elseif($slug == "beach-house"): ?>
		Beach House | Casa Alegria-Bohol
	<?php elseif($slug == "our-restaurant"): ?>
		Dining | Casa Alegria-Bohol
	<?php elseif($slug == "offers"): ?>
		Offers | Casa Alegria-Bohol
	<?php elseif($slug == "news-right"): ?>
		News | Casa Alegria-Bohol
	<?php elseif($slug == "contact"): ?>
		Contact Us | Casa Alegria-Bohol
	<?php else: ?>
		Casa Alegria-Bohol
	<?php endif;?>
</title>
<!-- reponsive meta -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap -->
<link href="<?php bloginfo('template_directory')?>/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php bloginfo('template_directory')?>/css/font-awesome.min.css" rel="stylesheet">
<!-- strock gap icons -->
<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/vendors/Stroke-Gap-Icons-Webfont/style.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/animate.min.css">
<!--    owl-carousel-->
<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/vendors/owlcarousel/owl.carousel.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/vendors/jquery-ui-1.11.4/jquery-ui.min.css">    

<!-- Main Css  -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/responsive.css"> 	 
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">

<meta property="og:title" content="Casa Alegria-Bohol"/>
<meta property="og:image" content="http://casaalegria-bohol.com/wp-content/themes/casa-alegria-bohol/images/banner/received_10207855441171480.jpeg"/>
<meta property="og:site_name" content="Casa Alegria-Bohol"/>
<meta property="og:description" content="An Affordable Base for Exploring Bohol's Delight"/>
	

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>