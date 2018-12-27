<?php
/**
 * Template Name: blog Template
 *
 * @package Tora
 */

get_header(); ?>

<div id="primary" class="container <?php echo esc_attr(tora_blog_layout()); ?> hello_balti" data-wow-duration=".5s" data-wow-delay="1s">

    <main id="main" class="site-main container" role="main">
        <div class="row">
            <div class="col-md-8">

                <?php
                $posts = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => -1,
                ));
                if($posts->have_posts()):
                    while ( $posts->have_posts() ) : $posts->the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                            <div class="entry-content">
                                <?php the_title(sprintf('<h1><a href="%s">',get_the_permalink()),'</a></h1>'); ?>
                                <a href="<?php the_permalink(); ?>"></a>
                            </div><!-- .entry-content -->

                            <div class="entry-content">
                                <?php the_excerpt(); ?>

                            </div><!-- .entry-content -->

                            <footer class="entry-footer">

                            </footer><!-- .entry-footer -->
                        </article><!-- #post-## -->

                <?php endwhile; // end of the loop.

             endif;?>
            </div>
            <div class="col-md-4">
                <?php get_sidebar('blog sidebar'); ?>
            </div>
        </div>



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
