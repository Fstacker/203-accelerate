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
				
				<?php // Start the loop
					while ( have_posts() ) : the_post();
						$type = get_field('type');
						$description = get_field('description');
						$icon = get_field('icon');
						$size = 'medium-large'
					?>

					<div class="about-services clearfix">
						<h3><?php echo $type; ?></h3>
						<p><?php echo $description; ?></p>
					</div>

					<?php the_content(); ?>



			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->



<?php get_footer(); ?>
