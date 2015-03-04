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
					<!-- 화면에 출력이 안되서 레이아웃 작업 못했습니다~
					<article class="bxslider">
						<div>
							<a href="#">
								<img src="http://wordpress.local:8080/wp-content/uploads/2015/03/main_slide11-960x590.jpg">
								<div class="slider_desc">
									<strong>title</strong>
									달걀 프라이를 얹은 도시락이나 소시지와 달걀말이를 넣은 김밥 도시락이면 너무나 충분했던 추억이 저마다 있다. 이 아련한 추억을 넘어 도시락이 새로이 조명받고 있다. 맛은 물론이고 다양한 조리법으로 개인의 취향과 영양을 맞춘 도시락. 하나의 요리로도 손색 없다. 도시락 이야기 밤새 뒤척이며 기다린…
								</div>
							</a>
						</div>
					</article> -->
					<article class="bxslider">
                        <?php
                        $fields = get_fields(2);
                        if( $fields )
                        {
                            foreach( $fields as $field_name => $value )
                            {
                                // get_field_object( $field_name, $post_id, $options )
                                // - $value has already been loaded for us, no point to load it again in the get_field_object function
                                $field = get_field_object($field_name, false, array('load_value' => false));
//                                printr($value);
                                echo '<div>';
                                echo "<img src='".$value['sizes']['large']."'>";
                                echo '</div>';
                            }
                        }
                        ?>
					</article>
					<header class="entry-header">
                        <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
						<div class="entry-thumbnail">
                        <?php the_post_thumbnail(); ?>
						</div>
						<?php endif; ?>
						<h1 class="entry-title"><?php //the_title(); ?></h1>
					</header><!-- .entry-header -->

                    <!-- GalleryImages below MainSlider -->
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