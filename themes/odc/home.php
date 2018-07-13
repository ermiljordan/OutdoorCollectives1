<?php
/**
 * Template for home page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package outdoorCollective
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
      <section class="hero-banner">
        <img class="logo-circle" src="<?php echo get_template_directory_uri(); ?>/images/outdoorCollective.svg" alt="outdoor collective">
      </section> 
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
