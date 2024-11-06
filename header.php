<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
            <div class="menu-show">
                <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </button>
                <button class="menu-cross">
                    <span class="line right-rotate"></span>
                    <span class="line left-rotate"></span>
                </button>
            </div>
            <div class="menu-hidden">
                <img src="<?php echo get_stylesheet_directory_uri() . '/images/Image logo en paralax.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
                <ul>
                    <li><a class="lineUp" href="#story">Histoire</a></li>
                    <li><a class="lineUp" href="#characters">Personnages</a></li>
                    <li><a class="lineUp" href="#place">Lieu</a></li>
                    <li><a class="lineUp" href="#studio">Studio Koukaki</a></li>
                </ul>
                <img class="orchid" src="<?php echo get_template_directory_uri() . '/assets/images/orchid.png'; ?> " alt="orchid">
                <img class="chat-violet float" src="<?php echo get_stylesheet_directory_uri() . '/images/chat-violet.png'; ?> " alt="chat violet">
                <img class="sunflower" src="<?php echo get_template_directory_uri() . '/assets/images/Sunflower.png'; ?> " alt="tournesol">
                <img class="random-flower" src="<?php echo get_template_directory_uri() . '/assets/images/random_flower.png'; ?> " alt="fleur banal">
                <img class="flower" src="<?php echo get_template_directory_uri() . '/assets/images/flower.png'; ?> " alt="fleur">
                <img class="chat-noir float" src="<?php echo get_stylesheet_directory_uri() . '/images/chat-noir.png'; ?> " alt="chat noir">
                <img class="chat-roux float" src="<?php echo get_stylesheet_directory_uri() . '/images/chat-roux.png'; ?> " alt="chat roux">
                <img class="hibiscus" src="<?php echo get_template_directory_uri() . '/assets/images/hibiscus_footer.png'; ?> " alt="hibiscus">
                <a class="end-menu" href="#">STUDIO KOUKAKI</a>
            </div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
