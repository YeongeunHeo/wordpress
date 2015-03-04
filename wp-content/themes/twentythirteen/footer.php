<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="footer-inner">
				<img src="http://wordpress.local:8080/wp-content/uploads/2015/03/footer.gif">
			</div>
			<div align="right">
		        <a href="#"><img src="http://wordpress.local:8080/wp-content/uploads/2015/03/facebook_button.gif"></a>
		        <a href="#"><img src="http://wordpress.local:8080/wp-content/uploads/2015/03/customer_button.gif"></a>
		    </div>
			<?//php get_sidebar( 'main' ); ?>

			<div class="site-info">
				<?php do_action( 'twentythirteen_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://www.shinsegae.com/', 'shinsegae' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentythirteen' ); ?>"><img src='http://wordpress.local:8080/wp-content/uploads/2015/03/ssg_logo.gif'></a>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->
	
	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.js"></script>
	<?php wp_footer(); ?>
</body>
</html>