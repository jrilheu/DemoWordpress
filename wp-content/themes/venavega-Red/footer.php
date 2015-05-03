<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Venavega
 * 
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer wrapper" role="contentinfo">
			<div class="col-md-6 InfoFooter dark-red">
				<?php iinclude_page(32,'displayTitle=true&titleBefore=<h3>'); ?>
			</div>
			<div class="col-md-6 InfoFooter dark-red">
				<?php iinclude_page(34,'displayTitle=true&titleBefore=<h3>'); ?>
			</div>
			<div style="clear:both;width:100%"></div>
			<div class="enlacesFooter">
				<h3>Enlaces de Interes</h3>
				<div style="text-align:center;">
					<a href="#">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/footerimgs/gob_online.jpg" alt="">
					</a>
					<a href="#">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/footerimgs/mpptaa.jpg" alt="">
					</a>
					<a href="#">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/footerimgs/bolipuertos.jpg" alt="">
					</a>
					<a href="#">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/footerimgs/conferry.jpg" alt="">
					</a>
					<a href="#">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/footerimgs/inea.jpg" alt="">
					</a>
					<a href="#">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/footerimgs/puertos_alba.jpg" alt="">
					</a>
				</div>
			</div>
			<div style="text-align:right;" class="dark-red wrapper">
				<p class="bottomText">2015 Todos los derechos reservados</p>
			</div>
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>