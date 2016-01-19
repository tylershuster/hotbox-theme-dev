<?php
/**
 * Header file common to all
 * templates
 *
 */
?>
<!doctype html>
<html class="site" <?php language_attributes(); ?>>
<head>
	<!--[if lt IE 9]>
		<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
	<![endif]-->

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:700,700italic,300,300italic,400,400italic,200' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
	<script async defer src="<?php echo get_template_directory_uri(); ?>/assets/js/core.js"></script>

	<!--<script type="text/javascript" src="https://github.com/imakewebthings/waypoints"></script>-->
  <!--<script type="text/javascript" src="http://pixelcog.github.io/parallax.js/"></script>-->
</head>
<body <?php body_class( "site__body" ); ?>>
	<header>

	    <h1><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/logo.svg" alt=""><span>The<br><em>Hot Box</em></span></h1>

	    <label for="menu--toggle">Menu</label>
	    <input type="checkbox" name="menu--toggle" class="menu--toggle">
	    <nav>
	      <ul>
	        <li><a href="home">Home</a></li>
	        <li><a href="home">My Account</a></li>
	        <li><a href="home">Store</a></li>
	        <li><a href="home">Logout</a></li>
	      </ul>
	    </nav>
	  </header>
