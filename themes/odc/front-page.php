<?php
/**
 * Template for front-page
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

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <section class="hero-banner">
				<div class="logo-sub">
					<div class="logo-banner">
						<img class="logo-circle" src="<?php echo get_template_directory_uri(); ?>/images/outdoorCollectiveMiddle.svg" alt="outdoor collective">
					</div>
					<div class="newsletter">
						<p class="sub-caption">Sign-up for subscription</p>
						<?php echo do_shortcode('[contact-form-7 id="57" title="newsletter"]'); ?>
					</div><!--NEWS LETTER-->
				</div><!--Logo banner-->
      </section><!--HERO BANNER--> 
	<section class="about-zypher container">
			<h2>Zypher Air Frame Tent</h2>
				<?php echo CFS()->get('zypher_air_frame_cap'); ?>
	</section>
	<section class="zypher-tents container-tent">
		<h2>Our Tents</h2>
		<ul>
		<?php 
				$args = array(
					'posts_per_page' 		=> 3,
					'orderby'						=> 'date',
					'order'							=> 'DESC',
					'post_type'					=> 'post',
					'post_status'				=> 'publish',
					'suppress_filters' 	=> true
				);
				?>
				<?php	$product_posts = get_posts( $args );?>
				<?php foreach ($product_posts as $post ) : (
							setup_postdata( $post ));  /// FIX THIS PART?>
				<li>
				<div class="thumbnail-tents">
					<?php the_post_thumbnail( '' ); ?>
				</div>
				<div class="content">
				<h3 class=fancy><span><?php the_title(); ?></span></h3>
				<?php the_content(); ?>
				<?php
    endforeach; 
    wp_reset_postdata(); ?>
				</div>
		</ul>
	</section>
	<section class="stary-nights">
	<?php echo CFS()->get( 'stary_captions' ); ?>
	</section>
	<section class="adventure">
		<div class="adventure-photos">
		<?php echo CFS()->get ('adventure_caption' ); ?>
		<div class="adventure-cap">
		<?php echo CFS()->get ( 'adventure_content' ); ?>
		</div>
		</div>
		<div class="right-caption">
		<?php echo CFS()->get ( 'adventure_content' ); ?>
		</div>
	</section>
	</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_sidebar();
get_footer();
