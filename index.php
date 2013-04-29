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
 * @subpackage Twenty_Eleven
 */

get_header(); ?>

	<div class="row">
		<div class="span8 marginTop20">

		<?php if (have_posts()) : ?>

			<?php while (have_posts()) : the_post(); ?>

				<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<span class="postmetadata"><?php the_category(' / ') ?> &mdash; <?php edit_post_link('Edit', '', ' &mdash; '); ?>  <?php comments_popup_link('No comments', '1 comment', '% comments'); ?></span><br/>
				    <small><span class="date"><?php the_time('d') ?></span><br /><?php the_time('M y') ?> by <?php the_author() ?></small>
					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					
					

					<div class="entry">
						<?php the_content('<em>Continue reading &rarr;</em>'); ?>
					</div>
					<div class="clearBoth"></div>

				</div>

			<?php endwhile; ?>

			<div class="navigation">
				<div class="pull-left"><?php next_posts_link('&larr; Older Entries') ?></div>
				<div class="pull-right"><?php previous_posts_link('Newer Entries &rarr;') ?></div>
				<div class="clearBoth"></div>
			</div>
			
			

			<?php else : ?>

			<h2 class="lead text-center">Not Found</h2>
			<p class="lead text-center">Sorry, but you are looking for something that isn't here.</p>
			<?php //get_search_form(); ?>

			<?php endif; ?>
			

		</div>

		<div class="span2 marginTop20">
			<?php get_sidebar(); ?>
		</div>
	</div>



<?php get_footer(); ?>

