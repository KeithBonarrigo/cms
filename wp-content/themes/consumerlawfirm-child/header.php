<?php /*header*/  ?>

    <!DOCTYPE html>

    <html <?php language_attributes(); ?>>

    <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <link rel="shortcut icon" href="<?php bloginfo('url') ?>/favicon.ico">

        <!-- Start Alexa Certify Javascript -->
        <script>
        _atrk_opts = { atrk_acct:"IgMxr1O7kI20L7", domain:"consumerlawfirmcenter.com",dynamic: true};
        (function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://certify-js.alexametrics.com/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
        </script>
        
        <!-- End Alexa Certify Javascript -->
        <!-- Start of LiveChat (www.livechatinc.com) code -->
        <script>
        window.__lc = window.__lc || {};
        window.__lc.license = 8632579;
        (function() {
        var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
        lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
        })();
        </script>
        <!-- End of LiveChat code -->
         
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    <div class='social-container'>
		<div class="facebook_left">
			<div id="facebook_icon" class="side-social"></div>
		</div>
		<div class="twitter_left">
			<div id="twitter_icon" class="side-social"></div>
		</div>
		<div class="gplus_left">
			<div id="gplus_icon" class="side-social"></div>
		</div>
		<div class="linkedin_left">
				<div id="linkedin_icon" class="side-social"></div>
		</div>
		<div class="email_left">
			<div id="email_icon" class="side-social"></div>
		</div>
	</div>


    <script>
        jQuery(document).ready(function($) {
            $(".social-container").animate({left: "0" }, 1300 );
            $(".facebook_left").click(function(){
                window.open("https://www.facebook.com/ConsumerRightsLawFirm", 'fb');
            });
            $(".twitter_left").click(function(){
                window.open("https://twitter.com/Crlfconsumerlaw", 'tw');
            });
            $(".gplus_left").click(function(){
                window.open("https://www.google.com/search?q=consumer+rights+law+firm+pllc&oq=consumer+rights+law+firm+pl&aqs=chrome.0.0j69i60l3j69i57j69i59.4915j0j4&sourceid=chrome&ie=UTF-8", 'goog');
            });
            $(".linkedin_left").click(function(){
                window.open("https://www.linkedin.com/in/derek-depetrillo-50a9246/", 'linkedin');
            });
            $(".email_left").click(function(event){
                event.preventDefault();
                var email = 'help@consumerlawfirmcenter.com';
                var subject = 'Contact us - Consumer Rights Law Firm Center';
                var emailBody = '';
                window.location = 'mailto:' + email + '?subject=' + subject + '&body=' +   emailBody;
            }); 
            /* adjust the tile heights */
            var max_height = 0; //set the flag to track the heights
            $(".tile-content").each(function(){
                var h = $(this).height();
                if(h > max_height) { max_height = h; }
            });
            var new_height = max_height + "px";
            $(".tile-content").css('min-height', new_height)
            /* end tile heights*/
        })
    /*--end social media sliding buttons--*/
    </script>
    <noscript>
        <a href="https://www.livechatinc.com/chat-with/8632579/">Chat with us</a>, powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener" target="_blank">LiveChat</a><br />
        <img src="https://certify.alexametrics.com/atrk.gif?account=IgMxr1O7kI20L7" style="display:none" height="1" width="1" alt="" />
        <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=173833050069741&amp;ev=PageView&amp;noscript=1" alt="" />
    </noscript>
        <div class="preloader">
            <div class="preloader-inner"></div>
        </div>

        <div id="page" class="hfeed site">
            <a class="skip-link screen-reader-text" href="#content">
                <?php esc_html_e( 'Skip to content', 'tora' ); ?>
            </a>

            <div class="container" style='padding-top:30px'>
                <a href="<?php bloginfo('url'); ?>">
                    <img src="<?php bloginfo('template_url') ?>/images/logo.png" alt="Consumer Law Firm" width="300" height="60" border="0">
                </a>
				 <?php // echo do_shortcode('[prisna-google-website-translator]'); ?>
                <div class="contact-area" style="float: right;">
                    <div class="contact-info">
                        <div class='contact-info-holder'>
							<div class="contact-block contact-block-phone">
                                <i class="fas fa-phone" style="color:black">&nbsp;</i><i class="far fa-comment-alt" style="color:black"></i>&nbsp;&nbsp;<!--<i class="tora-icon dslc-icon-ei-icon_phone">&nbsp;</i>-->(877) 700-5790 <div style='display:inline-block; width:65px'>&nbsp;</div><!-- - <a style="color:#ed5a5a" href="#">call</a> or <a style="color:#ed5a5a" href="#">text</a>-->
                            </div>
                            <div class="contact-block content-indented">
                                <i class="fas fa-gavel" style="color:black">&nbsp;</i>&nbsp;<a id="free-case-review-upper" href="javascript:void(0)">Get a free case review now</a>
                            </div>
                            <div class="contact-block content-indented">
                                <i class="fas fa-envelope-square" style="color:black">&nbsp;</i>&nbsp; <a id="header-email-link" style="color:#ed5a5a" href="mailto:help@consumerlawfirmcenter.com">help@consumerlawfirmcenter.com</a>
                            </div>    
                        </div>
                    </div>
                </div>

                <div class="contact-mobile"><i class="tora-icon dslc-icon-ei-arrow_triangle-down_alt2">&nbsp;</i>Contact</div>

            </div>

        </div>
        <!--begin tora header--> 
        <?php do_action('tora_header_bar'); ?>
        <?php if ( is_page( 'Home Page' )) { ?>
            <div class="header-img banner" >
                <img src="https://consumerlawfirmcenter.com/cms/wp-content/themes/consumerlawfirm/images/banner.jpg" style="width:100%" alt="Debt Collection Programs">
                <div class="container" style="text-align: center">
                    <div class="header-img__content">
                        <h1 style="font-size:30px; letter-spacing:1px">Debt collector Harassment is against the law!</h1>
                        <h2 style="text-transform:none !important">We've helped <span class="stand-out-text" style="font-family:'Roboto', sans-serif !important">1,000’s</span> of client at <strong>zero cost</strong>.<br />Let’s stop the calls today </h2>
                        <div class="call-now">
                            <span class="label">Call now at:</span>
                            <span class="number" style="font-family: 'Roboto', sans-serif !important">(877) 700-5790</span>
                            <!--<div style="margin-top:5px"><a href="https://www.google.com/maps/place/Consumer+Rights+Law+Firm+PLLC/@42.702374,-71.1328997,17z/data=!3m1!4b1!4m5!3m4!1s0x89e30650e98fba1f:0x33aeb4dd383c2358!8m2!3d42.702374!4d-71.130711" target="_blank">133 Main Street,  North Andover, MA USA 01845</a></div>-->
                        </div>
                        <a class="cta" id="home-banner-free-case-review" href="javascript:void(0)">
                            Free Case Review
                        </a>
                    </div>
                </div>
            </div> 
            <script>
                /*--start free case review buttons--*/
                jQuery("#free-case-review-upper").click(function (){
                    jQuery('html, body').animate({
                        scrollTop: jQuery("#freeCaseReview").offset().top - 100
                    }, 2000);
                });
                jQuery("#home-banner-free-case-review").click(function (){
                    jQuery('html, body').animate({
                        scrollTop: jQuery("#freeCaseReview").offset().top - 100
                    }, 2000);
                });
                /*--end free case review buttons--*/
            </script>   
        <?php } else { ?>
        <?php 
        $is_indiv = false;
        function is_blog () {
            if ( (is_archive()) || (is_author()) || (is_category()) || (is_home()) || (is_single()) || (is_tag()) ) {
                return true;
            }
            else {
                return false; 
            }
        }
        if (is_blog()) { $is_indiv = true; }
        $banner_images = array(
            'blog'=>array('https://consumerlawfirmcenter.com/cms/wp-content/uploads/2018/11/banner-handshake-1280x400.jpg', ''),
            'debt-collection-harassment-attorney'=>array('https://consumerlawfirmcenter.com/cms/wp-content/uploads/2018/11/banner-handshake-1280x400.jpg', 'Debt Collection Harassment Attorney List')
        );
        //get the slug and select the custom image for it
        global $post;
        $post_slug=$post->post_name;
        ?>
            <div class="header-img" style="overflow: hidden; max-height: 300px; width: 100%" >
                <?php 
                if(array_key_exists($post_slug, $banner_images)){ ?>
                    <img src="<?php echo $banner_images[$post_slug][0] ?>" alt="<?php echo $banner_images[$post_slug][1] ?>" style="width:100%">
                <?php }elseif($is_indiv){ ?>
                <?php }
                else{ ?>
                    <img src="<?php bloginfo('template_url') ?>/images/header_new.jpg" style="width:100%" alt="Debt Harrassment Advocates">
                <?php } ?>
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
                        <a href="#" class="block_link">&nbsp;</a>
                    </div>

                    <?php // if ( get_option( 'site_logo' ) ): ?>
                    <?php //endif; ?>
                    <!--end header-->


