<?php
/**
 * Template name: Error 404
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="error-content">
		<div class="error-main">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="error-message clearfix">
					<h1 class="four-oh-four">404</h1>
					<p class="message">Look out, we got an error here.<br><br>Let’s try this again.</p>
					<?php the_content(); ?>
				</div>
			<?php endwhile; // end of the loop. ?>
		</div>
	</div><!-- #primary -->

	<nav id="navigation" class="container">
		<div class="left"><a href="<?php echo site_url() ?>">&larr; <span>return home</span></a></div>
	</nav>
	<!-- <a href="<?php //echo site_url('/case-studies/') ?>"> -->

<?php get_footer(); ?>