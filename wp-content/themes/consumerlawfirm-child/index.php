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
				
				<?php if ( have_posts() ) : ?>
					<?php if ( is_home() && ! is_front_page() ) : ?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>
					<?php endif; ?>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php

							/*
							* Include the Post-Format-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Format name) and that will be used instead.
							*/
							get_template_part( 'template-parts/content', get_post_format() );
						?>

					<?php endwhile; ?>

					<?php the_posts_navigation(); ?>

					<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>
			</div>
            <div class="col-md-3  blog-container">
                <?php get_sidebar('blog sidebar'); ?>
            </div>
        </div>



    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
