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

	<div class="about-services clearfix">
		<div class="services">
			<ul>
				<?php new WP_Query('page=services'); ?>
					<?php // Start the loop
						while ( have_posts() ) : the_post();
							$type = get_field('type');
							$description = get_field('description');
							$icon = get_field('icon');
							$size = 'full';
						?>
						<h4><?php the_title(); ?></h4>
						<p><?php the_content(); ?></p>

						<h3><?php echo $type; ?></h3>
						<p><?php echo $description; ?></p>
						<figure>
							<?php echo wp_get_attachment_image($image, $size); ?>
						</figure>
					<?php endwhile; // end of the loop ?>
				<?php wp_reset_query(); ?>
			</ul>	
		</div>
	</div>



	<div class="interested-contact clearfix">
			<h3>Interested in working with us?</h3>
			<a class="button" href="#">Contact Us</a>
	</div>


<?php get_footer(); ?>
