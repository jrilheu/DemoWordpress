<?php get_header(); ?>
<div class="latest-posts col-md-8">
	<h3>Noticias Recientes</h3>
	 <?php $latest_blog_posts = new WP_Query( array( 'posts_per_page' => 4 ) );
		if ( $latest_blog_posts->have_posts() ) : while ( $latest_blog_posts->have_posts() ) : $latest_blog_posts->the_post();
	    // Loop output goes here ?>
	    	<div class="col-md-6">
	    		<a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post->ID, array( 290, 163) ); ?></a>
		    	<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		    	<div class="entry">
		 			<?php the_content(); ?>
		 		</div>
	 		</div>
		<?php endwhile; endif; ?>
</div>
<div class="twitter col-md-4">
	<iframe width="" height="200"  style="margin-bottom:10px;" src="https://www.youtube.com/embed/Px1pJGw2ykM" frameborder="0" allowfullscreen></iframe>
	<a class="twitter-timeline" height="400" href="https://twitter.com/VENAVEGAGOB" data-widget-id="591448330636546049">Tweets por el @VENAVEGAGOB.</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

</div>
<?php get_footer(); ?>