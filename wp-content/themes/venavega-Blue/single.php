<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Venavega
 * 
 */

get_header(); ?>

	<div id="primary" class="container" role="main">
		<h1>Noticias</h1>
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php setPostViews(get_the_ID()); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
				<?php twentythirteen_post_nav(); ?>
				<?php comments_template(); ?>

			<?php endwhile; ?>
	</div><!-- #primary -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>