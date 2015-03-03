<?php
/**
 * The sidebar containing the footer widget area
 *
 * If no active widgets in this sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
    <img src="http://wordpress.local:8080/wp-content/uploads/2015/03/footer.gif">
    <div align="right">
        <img src="http://wordpress.local:8080/wp-content/uploads/2015/03/facebook_button.gif">
        <img src="http://wordpress.local:8080/wp-content/uploads/2015/03/customer_button.gif">
    </div>
<!--	<div id="secondary" class="sidebar-container" role="complementary">-->
<!--		<div class="widget-area">-->
<!--			--><?php //dynamic_sidebar( 'sidebar-1' ); ?>
<!--		</div><!-- .widget-area -->
<!--	</div><!-- #secondary -->
<?php endif; ?>