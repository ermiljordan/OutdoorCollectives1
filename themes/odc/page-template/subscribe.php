<?php
/**
 * Template name: Subscribe
 *
 * @package outdoorCollective
 */

 
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
      <section class="sub-background">
        <h2 class="bold"><span class="italic">First</span>look</h2>
        <h2 class="brand-name">Outdoor Collective</h2>
        <h3 class="sub-cap">Become an expert camper!</h3>
        <p class="sub-par">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas finibus sodales urna nec congue. Nullam id eros mattis quam hendrerit ultrices eu ut neque. Praesent id molestie nisl. Integer commodo porta massa in tempus. Fusce hendrerit volutpat leo at dignissim. Pellentesque et auctor odio. In posuere laoreet arcu eleifend finibus.</p>
        <?php echo do_shortcode('[mc4wp_form id="75"]'); ?> 
      </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
