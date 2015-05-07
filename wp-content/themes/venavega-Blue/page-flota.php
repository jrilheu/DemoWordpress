<?php
/*
Template Name: Flota
*/
get_header();?> 
<div class="container" style="margin-bottom:20px;">
	<?php if (have_posts()) : while (have_posts()) : the_post();?>
	<h1 id="post-<?php the_ID(); ?>"><?php the_title();?></h1>
	<div class="col-md-6">
		<?php the_content(); 
 		endwhile; endif; ?>		
	</div>
	<div class="col-md-6">
		<?php echo do_shortcode("[metaslider id=89]"); ?>
	</div>
 </div>
<?php get_footer(); ?>

