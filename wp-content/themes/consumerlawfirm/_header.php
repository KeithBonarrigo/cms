<?php /*header*/  ?>

    <!DOCTYPE html>

    <html <?php language_attributes(); ?>>

    <head>

        <meta charset="<?php bloginfo( 'charset' ); ?>">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="profile" href="http://gmpg.org/xfn/11">

        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/images/favicon.ico">
        <?php wp_head(); ?>
    </head>



    <body <?php body_class(); ?>>
<?php include_once("analyticstracking.php") ?>
        <div class="preloader">

            <div class="preloader-inner"></div>

        </div>

        <div id="page" class="hfeed site">

            <a class="skip-link screen-reader-text" href="#content">

                <?php esc_html_e( 'Skip to content', 'tora' ); ?>

            </a>

            <div class="container">

                <a href="<?php bloginfo('url'); ?>">

                    <img src="<?php bloginfo('template_url') ?>/images/logo.png" alt="Consumer Law Firm" width="200" height="60" border="0">

                </a>

				 <?php // echo do_shortcode('[prisna-google-website-translator]'); ?>

                <div class="contact-area" style="float: right;">

                    <div class="contact-info">

                        <div class="contact-block">

                            <!-- <a href="https://www.facebook.com/ConsumerRightsLawFirm" class="face">
                            
                                <img src="http://demos.aykays.com/consumerlawfirm/wp-content/uploads/2016/08/cc.png" alt="akays!" width="20" height="20" border="0" class="face">
                            
                            </a> -->

                            <i class="tora-icon dslc-icon-ei-icon_phone"></i>(877) 700-5790 </div>

                        <div class="contact-block">

                            <i class="tora-icon dslc-icon-ei-icon_mail_alt"></i>

                            <a href="mailto:help@consumerlawfirmcenter.com">help@consumerlawfirmcenter.com</a>

                        </div>

                        <div class="contact-block">

                            <i class="tora-icon dslc-icon-ei-icon_pin_alt"></i>United States </div>

                    </div>

                </div>

                <div class="contact-mobile">

                    <i class="tora-icon dslc-icon-ei-arrow_triangle-down_alt2"></i>Contact

                </div>

            </div>

        </div>

        <?php // do_action('tora_header_image');?>

        <?php do_action('tora_header_bar'); ?>

        <?php // if ( is_page( 'Home Page' )) echo do_shortcode('[layerslider id="1"]'); ?>

        <?php if ( is_page( 'Home Page' )) { ?>
            <div class="header-img" >
                <img src="<?php bloginfo('template_url') ?>/images/banner.jpg" style="width:100%">
            </div>    
        <?php } else { ?>
            <div class="header-img" style="overflow: hidden; max-height: 300px; width: 100%" >
                <img src="<?php bloginfo('template_url') ?>/images/header_new.jpg" style="width:100%">
            </div>
        <?php } ?>

        <div id="content" class="site-content">

            <?php if ( !is_page_template('page-templates/page_builder.php') ) : ?>

            <div class="container clearfix">

                <?php else : ?>

                <div class="container clearfix">

                    <?php endif; ?>

                    <div class="site-branding">

                        <ul class="elem"></ul>

                        <span class="left_border"></span>

                        <a href="#" class="block_link">&nbsp;</a>

                    </div>

                    <?php // if ( get_option( 'site_logo' ) ): ?>

                    <!-- <img src="<?php echo esc_url( get_option('' ) ); ?>" alt="<?php bloginfo( 'name' ); ?> Logo" class="logo"> -->

                    <?php //endif; ?>


