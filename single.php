<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage ventureLateralBootstrap
 * @since Venture Lateral Bootstrap 1.0
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<div class="row marginTop20">
						<div class="span9">
							
							<?php get_template_part( 'content-single', get_post_format() ); ?>
							
						</div>
					</div>

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>