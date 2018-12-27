<?php
/**
 * Template Name: Home Page
 *
 * @package Tora
 */

get_header(); ?>

	<div id="primary" class="container <?php echo esc_attr(tora_blog_layout()); ?> balti" data-wow-duration=".5s" data-wow-delay="1s">

		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>


				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="entry-content">
						<?php the_content(); ?>
						<?php
							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'tora' ),
								'after'  => '</div>',
							) );
						?>
					</div><!-- .entry-content -->

					<footer class="entry-footer">
						<?php
							edit_post_link(
								sprintf(
									/* translators: %s: Name of current post */
									esc_html__( 'Edit %s', 'tora' ),
									the_title( '<span class="screen-reader-text">"', '"</span>', false )
								),
								'<span class="edit-link">',
								'</span>'
							);
						?>
					</footer><!-- .entry-footer -->
				</article><!-- #post-## -->



				<?php

					if ( comments_open() || '0' != get_comments_number() ) :

						comments_template();

					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<div id="freeCaseReview" class="contact animate slideInUp" data-wow-delay="2s">
		<div class="container">
			<h3 class="animate slideInUp">Free Case Review</h3>
			<?php echo do_shortcode('[contact-form-7 id="62" title="Short Contact Form"]'); ?>
		</div>
	</div>

	<div class="testimonials">
		<div class="container">
			<h3 class="_txt-center">What our happy clients say about us:</h3>
		<?php echo do_shortcode('[testimonials_cycle theme="no_style" width="100%" count="5" order_by="date" order="ASC" show_title="1" use_excerpt="1" show_thumbs="1" hide_view_more="1" testimonials_per_slide="1" transition="scrollHorz" timer="5000" pause_on_hover="true" auto_height="calc" show_pager_icons="1" prev_next="1"]'); ?>

<div class="_txt-center"><a href="//www.bbb.org/boston/business-reviews/attorneys-and-lawyers/consumer-rights-law-firm-pllc-in-north-andover-ma-124253/#bbbonlineclick"><img src=" <?php bloginfo('template_url') ?>/images/badge.png "></a></div>
		</div>

</div>

<?php get_footer(); ?>
