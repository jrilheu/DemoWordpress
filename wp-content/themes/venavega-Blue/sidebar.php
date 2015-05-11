<?php
/**
 * The sidebar containing the secondary widget area
 *
 * Displays on posts and pages.
 *
 * If no active widgets are in this sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Venavega
 * 
 */

if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
	<div id="tertiary" class="sidebar-container" role="complementary">
		<div class="sidebar-inner">
			<div class="widget-area">
				<aside class="widget widget_popular_entries">
					<h3 class="widget-title">Noticias más Leídas</h3>
					<?php
						query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC');
						if (have_posts()) : while (have_posts()) : the_post(); ?>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					<?php endwhile; endif;
					wp_reset_query(); ?>
				</aside>
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</div><!-- .widget-area -->
		</div><!-- .sidebar-inner -->
	</div><!-- #tertiary -->
<?php endif; ?>