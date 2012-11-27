<?php
/**
 * The Header for our theme.
 *
 * @package Thunemedia
 * @subpackage Thunemedia theme
 * @since Thunemedia 3.0
 */
?>
<!DOCTYPE html>
<html lang="no">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?=thune_page_title();?></title>
		<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/favicon.png">
		<link rel="shortcut icon" type="image/ico" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
		<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/thune_logo_iphone.png.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/thune_logo_ipad.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/thune_logo_iphone4.png" />

		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/Lattice/lattice.css" /> <!-- Lattice grid -->
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

		<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php bloginfo('template_directory'); ?>/javascript/bootstrap.min.js" type="text/javascript"></script>
		
		<?php wp_head();?>	
	</head>

	<body <?php body_class(); ?>>

		<header>
			<div class="container">
				<div id="logo" class="three columns">
					<a href="http://thunemedia.no" class="clearfix">
						<img src="<?php bloginfo('template_directory'); ?>/images/thune.png" alt="Thune" />
					</a>
				</div>
				<nav id="main-nav" class="ten columns text-center">
					<?php 
						wp_nav_menu( array( 'menu' => 'Main Navigation' ) ); 
					?>
				</nav>
				<nav id="secondary-nav" class="three columns">
					<?php 
						// wp-nav-menu( array( 'menu' => 'Secondary Navigation' ) ); 
					?>
					<ul>
						<li id="search"><a href="#search"><img src="<?php bloginfo('template_directory'); ?>/images/search.png" alt="Search" /></a><form><input type="text" placeholder="search" /><button>Search</button></form></li>
						<li><a href=""><img src="<?php bloginfo('template_directory'); ?>/images/contact.png" alt="Contact" /></a></li>
					</ul>
				</nav>
			</div>
		</header>

