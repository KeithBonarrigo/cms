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
		jQuery(document).ready(function($) {
			$("a").each(function() {
   				 //test each link for the presence of the home domain  
				var href = $(this).attr('href');
				if (href != undefined && (href.indexOf("consumerlawfirmcenter.com") < 0 || href.indexOf("#") < 0)){ //this is an external link - set it to 'nofollow'
					$(this).attr('rel', 'nofollow');
				}
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


<script type="text/javascript">
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

<!-- Start of LiveChat (www.livechatinc.com) code -->
<script type="text/javascript">
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
