<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

 

?>

		</div id="footer-id"><!-- #content -->
			<footer id="colophon" class="site-footer" role="contentinfo">
				<div id="footer-sidebar1">
					<?php
					if(is_active_sidebar('footer-sidebar-1')){
					dynamic_sidebar('footer-sidebar-1');
					}
					?>
				</div>

			
				<div id="footer" class="widget-footer"> 
					
					<?php if ( is_active_sidebar('dynamic_sidebar') || !dynamic_sidebar(2) ) : ?>
					<?php endif; ?>
				
				
				<img src="<?php echo get_template_directory_uri() . '/images/logos/inhabitent-logo-text.svg'?>" alt="Inhabitent Logo">
				</div>
				<div class="copyright">
				<p>COPYRIGHT &copy 2017 INHABITENT</p>	
				</div>
			</footer><!-- #colophon -->
			
		</div>	
	
	
		<?php wp_footer(); ?>

	</body>
</html>
