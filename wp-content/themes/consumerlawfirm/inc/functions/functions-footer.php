<?php
/**
 * Footer credits and menu
 *
 * @package Tora
 */


/**
 * Footer menu
 */
function tora_footer_menu() {
	?>
		<nav id="footer-navigation" class="footer-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'footer-menu', 'depth' => 1 ) ); ?>
		</nav>
	<?php
}
// add_action('tora_footer', 'tora_footer_menu', 7);

/**
 * Go to top button
 */
function tora_go_to_top() {
	echo '<a class="go-top"><i class="tora-icon dslc-icon-ei-arrow_triangle-up"></i></a>';
}
add_action('tora_footer', 'tora_go_to_top', 8);

/**
 * Footer credits
 */
function tora_footer_disclaimer() {
	?>
		<div class="site-info">
			<h3>Disclaimer:</h3>
			<p>This website is provided by Consumer Rights Law Firm, PLLC to educate and inform the general public of the services we provide and as an advertisement only. Submission of information to Consumer Rights Law Firm, PLLC or use of this website, does not constitute an attorney client relationship between Consumer Rights Law Firm, PLLC and the user or browser, nor shall it be construed as legal advice. We are not your attorneys until the terms of our agreement are confirmed in writing.</p>
		</div>
	<?php
}
add_action('tora_footer', 'tora_footer_disclaimer', 9);