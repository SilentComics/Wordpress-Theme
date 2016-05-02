<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <main id="main">
 *
 * @package SilentComics
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link type="text/plain" rel="author" href="http://silent-comics.com/humans.txt" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">			
		<div class="site-branding">
			<?php get_template_part('library/inline', 'logo.svg'); // remove or replace by your own custom svg logo ?>	
			<?php silentcomics_the_custom_logo(); ?>			
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1> <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
	</div><!-- .site-branding -->
		
		<?php if ( has_nav_menu( 'primary' ) ) : ?>
		<nav id="site-navigation" class="main-navigation clear" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'discover', 'silentcomics' ); ?></button>
			<div><a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'silentcomics' ); ?></a></div>

			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'wrap'  ) ); ?>
		</nav><!-- #site-navigation -->
		<?php endif; ?>
		
	</header><!-- #masthead -->