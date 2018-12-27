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
            if(have_posts()):
                while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'template-parts/content', 'single' ); ?>

                    <?php the_post_navigation(); ?>

                    <?php
                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                    ?>

                <?php

                endwhile; // End of the loop.
            endif;
            ?>
            </div>
            <div class="col-md-3  blog-container">
                <?php get_sidebar('blog sidebar'); ?>
            </div>
        </div>



    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
