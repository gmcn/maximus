<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starting_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-5894174-48"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-5894174-48');
</script>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
<link type="text/plain" rel="robots" href="<?php echo get_template_directory_uri(); ?>/humans.txt" />
<link type="text/plain" rel="author" href="<?php echo get_template_directory_uri(); ?>/robots.txt" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'starting-theme' ); ?></a>

	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-6 site-branding">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">

						<?php if ( is_front_page() ) : ?>
					    <img class="logo_home" src="<?php echo get_template_directory_uri(); ?>/images/maximus-logo_white.svg" alt="<?php bloginfo( 'name' ); ?> | <?php get_bloginfo( 'description', 'display' ); ?>" />
						<?php else : ?>
						    <img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/maximus-logo_red.svg" alt="<?php bloginfo( 'name' ); ?> | <?php get_bloginfo( 'description', 'display' ); ?>" />
						<?php	endif; ?>


					</a>
				</div>
				<div class="col-xs-6">

					<div class="contact-us hidden-xs">
						<span><a href="tel:+44 (0) 28 8774 8873">+44 (0) 28 8774 8873</a></span>
						<h2>CONTACT</h2>
					</div>

					<!-- Use any element to open/show the overlay navigation menu -->
					<span class="open" onclick="openNav()">
						<img class="hamburger" src="<?php echo get_template_directory_uri(); ?>/images/hamburger-menu.svg" />
					</span>
				</div>
			</div>
		</div>

		<!-- The overlay -->
			<div id="myNav" class="overlay">

			  <!-- Button to close the overlay navigation -->
			  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

			  <!-- Overlay content -->
			  <div class="container overlay-content">

					<div class="row">

						<div class="col-md-5 col-md-offset-1">
							<h3>Navigation (Click below for more options)</h3>
							<?php wp_nav_menu( array(
								'theme_location' => 'menu-1' ) );
								?>
						</div>

						<div class="col-md-6 overlay-content__contact">
							<div class="col-md-12 wrapper">
								<h3>Telephone</h3>
								<a class="telephone" href="mailto:+442887748873">+44 (0)28 8774 8873</a>
							</div>

							<div class="col-md-12 wrapper">
								<h3>Email</h3>
								<a class="email" href="mailto:sales@maximusscreening.com">sales@maximusscreening.com</a>
							</div>

  							<div class="col-xs-4 col-md-12 wrapper">
  								<h3>Social</h3>
  								<a class="social" href="https://www.facebook.com/MaximusCandS/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg" alt="Follow Maximus Crushing and Screening on Facebook"></a>
  								<a class="social" href="https://www.youtube.com/channel/UCGiC4x9GyTXvl2LWC6XH4Rg/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/youtube.svg" alt="Follow Maximus Crushing and Screening on Youtube"></a>
  							</div>

  							<div class="col-xs-8 col-md-12 wrapper">
  								<h3>Search</h3>
  								<form action="/" method="get">
  							    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
  								</form>
  							</div>
              </div>

						</div>
					</div>

				</div>
			</div>


	</header><!-- #masthead -->

	<div id="content" class="site-content">
