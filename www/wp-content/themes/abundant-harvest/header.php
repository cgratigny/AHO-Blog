<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="description" content="Abundant Harvest Organics is a California farm-share delivery service—similar to a CSA (Community Supported Agriculture)—offering weekly organic fruit and vegetable delivery to community sites throughout California." /> 
<meta name="keywords" content="Weekly organic fruit and vegetable delivery, organic produce, organic fruits and vegetables, CSA, Community 
Supported Agriculture" />
<link rel="shortcut icon" type="image/x-icon" href="http://www.abundantharvestorganics.com/favicon.ico">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link href="http://www.abundantharvestorganics.com/css/style.css" media="screen" rel="stylesheet" type="text/css" /> 
<link href="http://www.abundantharvestorganics.com/css/extra.css" media="screen" rel="stylesheet" type="text/css" /> 
<link href="http://www.abundantharvestorganics.com/css/print.css" media="print" rel="stylesheet" type="text/css" /> 
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_directory' ); ?>/css/wp-style.css" />
<meta name="verify-v1" content="A9WCKx/YqNdT3dtI5oHl0Vpa/gWkTL4r6yDlON9W5vE=" /> 
<LINK REL=stylesheet TYPE="text/css" media="screen" HREF="http://www.abundantharvestorganics.com/Library/css/moodalbox.css" /> 
<script src="http://www.abundantharvestorganics.com/Library/js/addingajax.js.php" type="text/javascript"></script> 
<script src="http://www.abundantharvestorganics.com/Library/js/common.js" type="text/javascript"></script> 
<script src="http://www.abundantharvestorganics.com/Library/js/mootools.js" type="text/javascript"></script> 
<script src="http://www.abundantharvestorganics.com/Library/js/moozValidation.js" type="text/javascript"></script> 
<script src="http://www.abundantharvestorganics.com/Library/js/moozdalbox.js" type="text/javascript"></script> 
<script src="http://www.abundantharvestorganics.com/Library/js/ngeneral.js" type="text/javascript"></script> 
<script src="http://www.abundantharvestorganics.com/Library/js/wz_dragdrop.js" type="text/javascript"></script> 
<script src="http://www.abundantharvestorganics.com/Library/js/wz_tooltip.js" type="text/javascript"></script> 
<LINK REL=stylesheet TYPE="text/css" media="screen" HREF="http://www.abundantharvestorganics.com/Library/css/moodalbox.css" /> 

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php

	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	wp_head();
?>
</head>

<body <?php body_class(); ?>>
<!-- Start: Wrapper --> 
<div id="main-wrapper"> 
  <div id="wrapper"> 
    <div id="container" class="clearfix"> 
      <div id="header"> 
        <div class="logo"> 
          <h1><a href="http://www.abundantharvestorganics.com/index.html">AHO</a></h1> 
        </div> 
		 <div class="top-link"> 
            <ul> 
	            <li><a href="http://www.abundantharvestorganics.com/login.html">Login to Your Account </a></li> 
	            <li><a href="http://www.abundantharvestorganics.com/signup-delivery-step1.html" class="top-signup">Sign Up NOW for Service</a></li> 
          </ul> 
        </div> 
      </div> 
 
      <div class="cont-area"> 
        <div class="left-menu"> 
          <ul> 
            <li ><a href="http://www.abundantharvestorganics.com/index.html">Home</a></li> 
			<li><a href="http://www.abundantharvestorganics.com/how_it_works.html">How It Works</a></li> 
            <li ><a href="http://www.abundantharvestorganics.com/signup-delivery-step1.html">Sign Up NOW</a></li> 
            <li class="last "><a href="http://www.abundantharvestorganics.com/about-us.html">About Us</a></li> 
            <li ><a href="http://www.abundantharvestorganics.com/case-contents.html">This Week’s Box</a></li> 
            <li ><a href="http://www.abundantharvestorganics.com/addons.html">This Week’s Add-ons</a></li> 
            <li ><a href="http://www.abundantharvestorganics.com/delivery_locations.html">Delivery Sites</a></li> 
            <li ><a href="http://www.abundantharvestorganics.com/whos-your-farmer.html">Who’s Your Farmer?&trade;</a></li> 
            <li ><a href="http://www.abundantharvestorganics.com/videos">Farmer Videos</a></li> 
            <li ><a href="http://www.abundantharvestorganics.com/host.html">Become a Host</a></li> 
            <li ><a href="http://www.abundantharvestorganics.com/faq.html">FAQs</a></li> 
            <li ><a href="http://www.abundantharvestorganics.com/recipes.html">Recipes</a></li> 
            <li ><a href="http://www.abundantharvestorganics.com/newsletter.html">Newsletter</a></li> 
            <li class="last "><a href="http://www.abundantharvestorganics.com/contact-us.html">Contact Us</a></li> 
          </ul> 
          
          <div class="bot-logo-sec"> 
            <p><a href="http://www.usda.gov"><img src="http://www.abundantharvestorganics.com/images/usda-logo.png" alt="" /></a>&nbsp;&nbsp;<a href="http://www.ccof.org"><img src="http://www.abundantharvestorganics.com/images/har-logo.gif" alt="" /></a></p> 
            <p><a href="http://www.localharvest.org"><img src="http://www.abundantharvestorganics.com/images/local-harvest.png" alt="" /></a></p> 
          </div> 
        </div> 
 
	<div class="mid-sec"> 
   	 	<div id="template-top-cor" class="top-cor"></div> 
    		<div id="template-cont-bg" class="cont-bg">