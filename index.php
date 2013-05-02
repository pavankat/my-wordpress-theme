<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage ventureLateralBootstrap
 */

get_header(); ?>

<div class="row">
	<div class="span9 marginTop20">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<span class="lead"><?php the_category(' / ') ?> 
				-  <?php the_time('M/d/y') ?> by <?php the_author() ?></span>
				<br>

				<div class="entry marginBottom40">
					<p class="lead"><?php the_content('<em class="lead">Continue reading &rarr;</em>'); ?>
					</p>
				</div>


		<?php endwhile; ?>

		<div class="navigation">
			<div class="pull-left lead"><?php next_posts_link('&larr; Older Entries') ?></div>
			<div class="pull-right lead"><?php previous_posts_link('Newer Entries &rarr;') ?></div>
			<div class="clearBoth"></div>
		</div>
		
		

		<?php else : ?>

		<h2 class="lead text-center">Not Found</h2>
		<p class="lead text-center">Sorry, but you are looking for something that isn't here.</p>

		<?php endif; ?>
		

	</div>

	<div class="span3 marginTop20">
		<?php get_sidebar(); ?>
	</div>
</div>


<?php get_footer(); ?>

