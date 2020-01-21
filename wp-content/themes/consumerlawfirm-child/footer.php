<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tora
 */

?>
	
		</div>
	</div><!-- #content -->
	<script>
		/*jQuery(document).ready(function($) {
			$("a").each(function() {
   				 //test each link for the presence of the home domain  
				var href = $(this).attr('href');
				if (href != undefined && (href.indexOf("consumerlawfirmcenter.com") < 0 || href.indexOf("#") < 0)){ //this is an external link - set it to 'nofollow'
					$(this).attr('rel', 'nofollow');
				}
			});
		}); */
		
		jQuery(document).ready(function($) {
			//test for mobile
			var isMobile = false; //initiate as false
				// device detection
				if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)  || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) { 
    					isMobile = true;
				}
				//end test for mobile	
			if(isMobile){
				/*
					console.log('moving now');
					var i = 0;
					while(i<10){
						var elementExists = document.getElementById("chat-widget-container");
						//console.log($("#chat-widget").length);
						console.log('ytrski');
						console.log(elementExists);
						i++;
					}
					console.log($("#chat-widget").length);
					$("#chat-widget-container iframe").appendTo("#mobile-live-chat");
					$("#mobile-live-chat").append($("#chat-widget-container iframe"));
				*/
			}
			
			
			$('.cta').each(function() {
				
				var banner_width = $('#homepage-banner').width();
				var cta_width = $('.cta').width();

				//console.log(banner_width);
				var button_width = banner_width * .13;
				var font_size = banner_width * .012;
				font_clean = Math.floor(font_size);
				//console.log(font_clean);
				var font_clean_string = font_clean + 'px !important';
				$('.cta').css({ 'font-size': font_clean_string });


				var banner_height = $('#homepage-banner').height();
				//console.log(banner_height);

				var height_to_set_cta = banner_height * .77;
				var right_to_set_cta = banner_width * .02;
				//console.log(height_to_set_cta);
				
				$(this).css({top: height_to_set_cta, right:right_to_set_cta });
				var ht_to_set = banner_height;
				//console.log(ht_to_set);

				//$('.banner').css({height: ht_to_set });
				//$('.container').css({height: ht_to_set });
				//console.log($('.banner').height());
				

				


   			});
		}); 
	</script>

	

	<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="inner-footer">
				<?php do_action('tora_footer'); ?>
				<?php dynamic_sidebar('newsletter' ); ?>
				<div class="copyrights">
					© Copyright 2010-2018 Consumer Rights Law Firm, PLLC All rights reserved.
					<!--<br>
					Website by <a href="http://aykays.com">Aykays</a>-->
				</div>
			</div>
		</div><!--.container-->
	</footer><!-- #colophon -->
<!--</div> #page -->
<?php wp_footer(); ?>


<script type="text/javascript" defer="defer">
	jQuery(function($) {
		// new WOW().init();
		wow = new WOW({
			boxClass:     'animate',      // default: wow
			animateClass: 'animated', // default
			offset:       0,          // default
			mobile:       true,       // default
			live:         true        // default
		});
		wow.init();
	});
</script>
<!--<div id="mobile-lower" style='text-align:left; padding-top:7px;'>
	<div class='mobile-button-container'><i class='fas fa-gavel' style='color:#ed5a5a'></i>&nbsp;&nbsp;<?php echo do_shortcode('[wp_colorbox_media url="https://consumerlawfirmcenter.com/file-a-complaint/" type="iframe" hyperlink="File a Complaint With Us"]') ?></div>
	<br />
	
</div>-->
<style>
    #whiteboard_overlay { padding:0px; margin:0px;  background-color:#333; opacity:.75;  position:absolute; width:100%; height:100%; top:0; left:0; z-index:109990; }
    #whiteboard_new { background-color:#FFF; position:absolute; top:25%; z-index:110000; width:500px; height:50%; min-height:370px;  margin:auto auto; }
    #whiteboard-close-x { float:right; padding:3px 10px 3px 0px; background-color: #FFF; text-decoration:none !important; color:#000 !important; font-weight: bold; }
    #whiteboard-title { padding:5px 0px 0px 7px; font-weight:bold; color:#000; }
</style>
<div id="whiteboard_overlay" style="display:none">
    
</div>
<div id="whiteboard_new" style="display:none">
    <div id="whiteboard-close"><a id="whiteboard-close-x">X</a></div>
    <div id="whiteboard-title">How We Work For You</div>
</div>
<script>
jQuery("#home-banner-free-case-review").click(function() { 
                	/*$("#home-banner-free-case-review").animate({ 
                    		width: "300px" 
                	}); 
                	$("#home-banner-free-case-review").animate({ 
                    		height: "300px" 
                	});*/
			console.log("heyhi");
            	}); 
</script>
<script>
	/*// Returns width of browser viewport
	var bwidth = jQuery('.mobile-button-container').width();
	var swidth = jQuery('.site-footer').width();
	var margintoset = (swidth - bwidth)/2;
	jQuery('.mobile-button-container').css('margin-left',margintoset+'px');

	jQuery('.mobile-button-container').click(function() {
  		jQuery('#chat-widget-container').css('z-index', 12);
	});*/
</script>
<script>
	jQuery('.mobile-button-container').click(function() {
  		jQuery('#chat-widget-container').css('z-index', 12);
	});

    jQuery('#whiteboard-open').click(function() {
	var w = jQuery( window ).width();
	if(w >= 500){
	   var vid_html = '<video class="wp-video-shortcode whiteboard-video" id="video-12-1" width="500" height="350" style="display:inline-block !important;" preload="metadata" controls="controls"><source type="video/mp4" src="https://consumerlawfirmcenter.com/cms/wp-content/uploads/2019/05/Whiteboardmp4.mp4?_=1"><a href="https://consumerlawfirmcenter.com/cms/wp-content/uploads/2016/05/v1_x264.mp4">https://consumerlawfirmcenter.com/cms/wp-content/uploads/2016/05/v1_x264.mp4</a></video>';
	}else {
	   jQuery('#whiteboard_new').css("width", "300px");
	   jQuery('#whiteboard_new').css("height", "245px");

	   jQuery('#whiteboard_new').css("min-height", "245px");
	   jQuery('#whiteboard_new').css("margin-left", "auto");
	   jQuery('#whiteboard_new').css("margin-right", "auto");
	   var vid_html = '<video style="width:300px !important" class="wp-video-shortcode whiteboard-video" id="video-12-1" width="300" height="245" style="display:inline-block !important;" preload="metadata" controls="controls"><source type="video/mp4" src="https://consumerlawfirmcenter.com/cms/wp-content/uploads/2019/05/Whiteboardmp4.mp4?_=1"><a href="https://consumerlawfirmcenter.com/cms/wp-content/uploads/2016/05/v1_x264.mp4">https://consumerlawfirmcenter.com/cms/wp-content/uploads/2016/05/v1_x264.mp4</a></video>';
	}	

        //if(jQuery('#whiteboard_new').contains(".wp-video-shortcode")){
        
        if (!jQuery('#whiteboard_new').find('.wp-video-shortcode').length) {
            jQuery('#whiteboard_new').append(vid_html);
	    
 	    
	    
        }
        // Returns width of browser viewport
	var overlay_width = jQuery('#whiteboard_overlay').width();
	var whiteboard_width = jQuery('#whiteboard_new').width();
	var margintoset = (overlay_width - whiteboard_width)/2;
	jQuery('#whiteboard_new').css('margin-left',margintoset+'px');
  	jQuery('#whiteboard_new').fadeIn( "slow" );
        jQuery('#whiteboard_overlay').fadeIn( "slow" );
	jQuery(".whiteboard-video").each(function () { this.play() });
	});
    jQuery('#whiteboard-close-x').click(function() {
		jQuery("video").each(function () { this.pause() });
  		jQuery('#whiteboard_new').fadeOut( "slow" );
        jQuery('#whiteboard_overlay').fadeOut( "slow" );
	});
</script>
<script>
	jQuery('.mobile-button-container').click(function() {
  		jQuery('#chat-widget-container').css('z-index', 12);
	});
    
    


    jQuery('.dslc-icon-ei-icon_search').click(function() {
	
	var w = jQuery( window ).width();
	if(w >= 500){
	   var vid_html = '<video class="wp-video-shortcode whiteboard-video" id="video-12-1" width="500" height="350" style="display:inline-block !important;" preload="metadata" controls="controls"><source type="video/mp4" src="https://consumerlawfirmcenter.com/cms/wp-content/uploads/2019/05/Whiteboardmp4.mp4?_=1"><a href="https://consumerlawfirmcenter.com/cms/wp-content/uploads/2016/05/v1_x264.mp4">https://consumerlawfirmcenter.com/cms/wp-content/uploads/2016/05/v1_x264.mp4</a></video>';
	   var vid_html = '<div style="text-align:center"><form style="margin:20px 15px" class="wp-video-shortcode whiteboard-video" action="" method="get"><input id="s" name="s" type="text" value="" /><input style="padding: 5px !important" type="submit" value="search" /></form></div>';
	}else {
	   jQuery('#whiteboard_new').css("width", "300px");
	   jQuery('#whiteboard_new').css("height", "100px");

	   jQuery('#whiteboard_new').css("min-height", "100px");
	   jQuery('#whiteboard_new').css("margin-left", "auto");
	   jQuery('#whiteboard_new').css("margin-right", "auto");
	   var vid_html = '<video style="width:300px !important" class="wp-video-shortcode whiteboard-video" id="video-12-1" width="300" height="245" style="display:inline-block !important;" preload="metadata" controls="controls"><source type="video/mp4" src="https://consumerlawfirmcenter.com/cms/wp-content/uploads/2019/05/Whiteboardmp4.mp4?_=1"><a href="https://consumerlawfirmcenter.com/cms/wp-content/uploads/2016/05/v1_x264.mp4">https://consumerlawfirmcenter.com/cms/wp-content/uploads/2016/05/v1_x264.mp4</a></video>';
	   var vid_html = '<form style="margin:20px 15px" class="wp-video-shortcode whiteboard-video" action="" method="get"><input id="s" name="s" type="text" value="Search Term" /><input style="padding: 5px !important" type="submit" value="search" /></form>';
	}	
        
        if (!jQuery('#whiteboard_new').find('.wp-video-shortcode').length) {
            jQuery('#whiteboard_new').append(vid_html);
	    
 	    
	    
        
        // Returns width of browser viewport
	var overlay_width = jQuery('#whiteboard_overlay').width();
	var whiteboard_width = jQuery('#whiteboard_new').width();
	var margintoset = (overlay_width - whiteboard_width)/2;
	jQuery('#whiteboard_new').css('margin-left',margintoset+'px');
	jQuery('#whiteboard_new').css('height','150px');
	jQuery('#whiteboard_new').css('min-height','150px');



  	jQuery('#whiteboard_new').fadeIn( "slow" );
        jQuery('#whiteboard_overlay').fadeIn( "slow" );
	jQuery('#whiteboard-title').html('Search Our Site');
	}
	});
    jQuery('#whiteboard-close-x').click(function() {
		jQuery("video").each(function () { this.pause() });
  		jQuery('#whiteboard_new').fadeOut( "slow" );
        jQuery('#whiteboard_overlay').fadeOut( "slow" );
	});
</script>

<!-- Start of LiveChat (www.livechatinc.com) code -->
<script type="text/javascript" defer="defer">

window.__lc = window.__lc || {};
window.__lc.license = 8632579;
(function() {
  var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
  lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
})();

</script> 
<!-- End of LiveChat code -->
</body>
</html>
