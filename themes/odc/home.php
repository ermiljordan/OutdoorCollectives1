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
        <img class="logo-circle" src="<?php echo get_template_directory_uri(); ?>/images/outdoorCollectiveMiddle.svg" alt="outdoor collective">
      </section> 
			
		</main><!-- #main -->
	</div><!-- #primary -->
	<section class="about-zypher">
		<div class=container>
			<h2>Zypher Air Frame Tent</h2>
			<p class="about-zypher-tent">
			The Zephyr aims to resolve the many traditional challenges faced by campers through an all-in-one solution. Based on the most advanced Air Frame system that exists in the world today, the tent is an ideal balance of utility, safety, comfort, durability and convenience. It embodies a holistic design approach that raises the bar and sets the new standard for easy luxury camping.
			</p>
		</div>
	</section>
	<section class="zypher-tents container">
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
				<?php foreach ($product_posts as $post ) : (setup_postdata( $post ));  /// FIX THIS PART?>
				<li>
				<div class="thumbnail-tents">
					<?php the_post_thumbnail( '' ); ?>
				</div>
				<div>
				<h3><a class="post-title"> <?php the_title(); ?></h3>
				<p><?php echo $post->post ?></p>
				</div>
				<?php endforeach; wp_reset_postdata(); ?>
		</ul>
	</section>

<?php
get_sidebar();
get_footer();
