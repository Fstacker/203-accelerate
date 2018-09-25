<?php
/**
 * Template Name:  About Page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
			<div class="about-description clearfix">
				<p>Accelerate is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile. </p>
			</div>				
		</div><!-- .main-content -->
	</div><!-- #primary -->



	<!-- <ul class="services-list"> -->
		<?php query_posts('posts_per_page=4&post_type=services'); ?>
			<?php // start the loop 
				while (have_posts() ) : the_post();
				$icon = get_field('icon');
				$description = get_field('description');
				$size = "medium";
			?>
						<h3><?php the_title(); ?></h3>
						<p><?php echo $description; ?></p>
						<?php if($icon) { 
							echo wp_get_attachment_image($icon, $size);
			 			} ?>
						
			<?php endwhile; //end of the loop ?>
		<?php wp_reset_query(); ?>
	<!-- </ul> -->


	<div class="interested-contact clearfix">
			<h3>Interested in working with us?</h3>
			<a class="button" href="#">Contact Us</a>
	</div>


<?php get_footer(); ?>
