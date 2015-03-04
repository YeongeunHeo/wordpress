<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<article class="bxslider">
						<div>
							<img src="http://wordpress.local:8080/wp-content/uploads/2015/03/main_slide11-960x590.jpg">
						</div>
						<div>
							<img src="http://wordpress.local:8080/wp-content/uploads/2015/03/main_slide2-960x590.jpg">
						</div>
					</article>
					<header class="entry-header">
						<div>
							<!-- 슬라이더 이미지 가져오기 
							<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>-->
						</div>
						<div class="entry-thumbnail">
                        <?php the_post_thumbnail(); ?>
						</div>
						<?php endif; ?>
                        <?php
                        $fields = get_fields(2);
                        if( $fields )
                        {
                            foreach( $fields as $field_name => $value )
                            {
                                // get_field_object( $field_name, $post_id, $options )
                                // - $value has already been loaded for us, no point to load it again in the get_field_object function
                                $field = get_field_object($field_name, false, array('load_value' => false));

                                echo '<div>';
//                                printr($value);
                                echo "<img src='".$value['sizes']['large']."'>";
                                echo '</div>';
                            }
                        }
                        ?>
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					</div><!-- .entry-content -->

					<footer class="entry-meta">
						<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-meta -->
				</article><!-- #post -->

				<?php //comments_template(); ?>
			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>