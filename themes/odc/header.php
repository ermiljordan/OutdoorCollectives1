<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package outdoorCollective
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
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'odc' ); ?></a>

	<header id="masthead" class="site-header reverse-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' )); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		</div><!-- .site-branding -->
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<div class="header-background">
				<div class="header">
					<a href="<?php echo esc_url( home_url('/') ); ?>"><img class="logo-header" src="<?php echo get_template_directory_uri(); ?>/images/outdoorCollectiveLogo.svg"></a>
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'odc' ); ?></button>
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
					?>
				</div><!-- #header -->	
			</div><!-- #header-background -->
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
