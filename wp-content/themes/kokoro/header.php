<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kokoro
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <script
            src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
            crossorigin="anonymous"></script>
	<?php wp_head(); ?>
    <script type="text/javascript" src="<?php echo get_template_directory_uri('/'); ?>/js/jquery.flexslider-min.js"></script>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'kokoro' ); ?></a>
	<header id="masthead" class="site-header">
        <a class="decorlux-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" >
            <img src="<?php echo get_template_directory_uri('/'); ?>/images/logo.svg" alt="Kokoro Sushi">
        </a>

        <a href="#" id="burger-icon">
            <span></span>
            <span></span>
            <span></span>
        </a>
		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
