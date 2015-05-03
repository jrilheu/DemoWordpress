<?php
/*
Template Name: Nosotros
*/
get_header();?> 
<div class="container" style="margin-bottom:20px;">
<?php if (have_posts()) : while (have_posts()) : the_post();?>
<h1 id="post-<?php the_ID(); ?>"><?php the_title();?></h1>
<?php the_content(); 
 endwhile; endif; ?>
 </div>
<?php get_footer(); ?>