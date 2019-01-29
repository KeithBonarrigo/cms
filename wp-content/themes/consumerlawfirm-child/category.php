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
            <div class="col-md-3 blog-container">
                <div class='entry-content' id='recent-news'>

                    <h4 class='blog-h4'>Recent News:</h4>
                    <ul id='rec-news'>
                    <li class='rec-news-link'><a class='rec-news-link' href='https://consumerlawfirmcenter.com/midland-credit-management-phone-harassment-mcm-complaints/'>Midland Credit Management Phone Harassment? Stop the Calls!</a></li>
                    <li class='rec-news-link'><a class='rec-news-link' href='https://consumerlawfirmcenter.com/stop-calls-alltran-financial-phone-harassment/'>Stop the Calls! End Alltran Financial Phone Harassment!</a></li>
                    <li class='rec-news-link'><a class='rec-news-link' href='https://consumerlawfirmcenter.com/stop-robocalls-end-santander-phone-harassment/'>Stop Santander Robocalls! End Santander Phone Harassment!</a></li>
                    <li class='rec-news-link'><a class='rec-news-link' href='https://consumerlawfirmcenter.com/collection-agency-phone-harassment/'>Stop Collection Agency Phone Harassment! Get Peace Of Mind.</a></li>
                    <li class='rec-news-link'><a class='rec-news-link' href='https://consumerlawfirmcenter.com/alpha-recovery-phone-harassment/'>Stop Alpha Recovery Phone Harassment. End the Calls.</a></li>
                    <li class='rec-news-link'><a class='rec-news-link' href='https://consumerlawfirmcenter.com/credit-control-phone-harassment-stop-calls/'>Credit Control Phone Harassment. Stop Calls! End the Harassment!</a></li>
                    <li class='rec-news-link'><a class='rec-news-link' href='https://consumerlawfirmcenter.com/american-express-stop-robocalls/'>Stop American Express Phone Harassment! Get the Calls to End.</a></li>
                   
                    </ul>
                </div>
            </div>
            <div class="col-md-6  blog-container-posts">

                <?php
                $this_category = get_queried_object();
                $cat = get_the_category();
                //echo $cat[0]->cat_name;
                $posts = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => -1,
                    'category_name' => $this_category->slug
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
            <div class="col-md-3  blog-container">
                <?php get_sidebar('blog sidebar'); ?>
            </div>
        </div>



    </main><!-- #main -->
</div><!-- #primary -->
<script>
    jQuery(document).ready(function($) {
    $('#full-view-button').click();
    })
</script>
<?php get_footer(); ?>
