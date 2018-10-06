<?php
/**
 * Template Name:
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

	<div class="our-services">
		<h4>Our Services</h4>
		<p>We take pride in our clients and the content we create for them.<br>
		Here's a brief overview of our offered services.</p>
	</div>

	<div class="about-services clearfix">
		<div class="services">
			<ul>
				<?php $args = array(
						'post_type' => 'services',
					);
					$services = new WP_Query($args);
						// Start the loop
						while ( $services -> have_posts() ) : $services->the_post();
							$description = get_field('description');
							//$icon = get_field('icon');
						?>
						<li class="services-item">
							<h3><?php the_title(); ?></h3> 
							<?php the_content(); ?>
						</li>
						<?php endwhile; // end of the loop ?>
					<?php wp_reset_postdata(); ?>
			</ul>	
		</div>
	</div>



	<div class="interested-contact clearfix">
		<h3>Interested in working with us?</h3>
		<a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
	</div>


<?php get_footer(); ?>
