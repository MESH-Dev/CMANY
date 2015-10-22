<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js ie6 oldie" lang="<?php language_attributes(); ?>"> <![endif]-->
<!--[if IE 7]><html class="no-js ie7 oldie" lang="<?php language_attributes(); ?>"> <![endif]-->
<!--[if IE 8]><html class="no-js ie8 oldie" lang="<?php language_attributes(); ?>"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="<?php language_attributes(); ?>">
<!--<![endif]-->
<head>

<!-- ///// TITLE-->
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '/', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>

<!--META-->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="<?php bloginfo( 'charset' ); ?>">



	    <!--CSS-->
	    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/reset.css" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/style.css" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/js/colorbox.css" />
		<!--
		<link rel="stylesheet" type="text/css" media="all" href="<?php //bloginfo( 'template_url' ); ?>/css/fonts.css" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php //bloginfo( 'template_url' ); ?>/css/color.css" media="all">

		<link rel="pingback" href="<?php //bloginfo( 'pingback_url' ); ?>" />
		-->

		<!--JAVASCRIPT-->
		<script type='text/javascript'>
			var templateDir = "<?php bloginfo('template_directory') ?>";
		</script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script type="text/javascript">var _gaq=_gaq||[];_gaq.push(["_setAccount","UA-9261915-1"]);_gaq.push(["_trackPageview"]);(function(){var e=document.createElement("script");e.type="text/javascript";e.async=true;e.src=("https:"==document.location.protocol?"https://ssl":"http://www")+".google-analytics.com/ga.js";var t=document.getElementsByTagName("script")[0];t.parentNode.insertBefore(e,t)})();</script>
		<script type="text/javascript">var small="width=device-width, initial-scale=.33, maximum-scale=1";var large="width=device-width, initial-scale=.66, maximum-scale=1";var viewPort=document.createElement("meta");viewPort.id="viewport";viewPort.name="viewport";if(window.outerWidth<500){viewPort.content=small}else{viewPort.content=large}document.getElementsByTagName("HEAD")[0].appendChild(viewPort);</script>


<?php	wp_head();?>

 <!--[if lt IE 9]>
<script src="<?php bloginfo( 'template_url' ); ?>/js/html5.js" type="text/javascript"></script>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
<link rel="stylesheet" media="screen" href="<?php bloginfo( 'template_url' ); ?>/css/ie.css" />
<![endif]-->
<meta name="google-site-verification" content="IgyERgUFS5ccnEs0twEQ7KVwhMw-o9xBEljrP-fpzYc" />
</head>
<body<?php body_class(); ?>>
