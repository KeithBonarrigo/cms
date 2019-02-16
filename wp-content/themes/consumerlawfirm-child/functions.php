<?php
// Remove WP Version From Styles	
add_filter( 'style_loader_src', 'sdt_remove_ver_css_js', 9999 );
// Remove WP Version From Scripts
add_filter( 'script_loader_src', 'sdt_remove_ver_css_js', 9999 );

// Function to remove version numbers
function sdt_remove_ver_css_js( $src ) {
	if ( strpos( $src, 'ver=' ) )
		$src = remove_query_arg( 'ver', $src );
	return $src;
}
//////////////////////////////////////////
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
add_action( 'wp_enqueue_scripts', 'custom_load_font_awesome' );
remove_filter('the_content', 'wpautop');
/**
 * Enqueue Font Awesome.
 */

function add_jquery_ui() {
    wp_enqueue_script('jquery-ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.8/jquery-ui.min.js', false, '1.8.8');
}
add_action( 'init', 'add_jquery_ui' );

function wpb_add_google_fonts() {
	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=EB+Garamond', false ); 
}
	
add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );


function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}
function custom_load_font_awesome() {

    wp_enqueue_style( 'font-awesome-free', '//use.fontawesome.com/releases/v5.2.0/css/all.css' );

}

//override tora bar for formatting/validation
/**
 * Contact info
 */
/*
function tora_contact_info() {
	$toggle_contact = get_theme_mod('toggle_contact', 1);
	$phone 	 		= get_theme_mod('contact_phone', '844-560-7580');
	$email 	 		= antispambot(get_theme_mod('contact_email', 'info@studentloanharassment.com'));
	$address 		= get_theme_mod('contact_address', 'United States');
	$mobile_button  = get_theme_mod('mobile_button', 'Contact');

	if ($toggle_contact) {
		if (has_nav_menu( 'social' )) : ?>
		<div class="contact-area has-social">
		<?php else : ?>
		<div class="contact-area">
		<?php endif; ?>
			<div class="container clearfix">
				<?php if ( has_nav_menu( 'social' ) ) : ?>
				<nav class="contact-social clearfix">
					<?php //wp_nav_menu( array( 'theme_location' => 'social', 'link_before' => '<span class="screen-reader-text">', 'link_after' => '</span>', 'menu_class' => 'menu clearfix', 'fallback_cb' => false ) ); ?>
					<div class="menu-social-menu-container">
						<ul id="menu-social-menu" class="menu clearfix">
							<li id="menu-item-20" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-20">
								<a href="https://www.facebook.com/ConsumerRightsLawFirm" target="_blank"></a>
							</li>
							<li id="menu-item-21" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-21">
								<a href="#twitter" target="_blank"><i class="dslc-icon-ei-social_twitter"></i></a>
							</li>
						</ul>
					</div>
				</nav>
				<?php endif; ?>
				<div class="contact-info">
					<?php if ($phone) : ?>
					<div class="contact-block">
						<!--<i class="tora-icon dslc-icon-ei-icon_phone"></i>--><?php echo esc_html($phone); ?>
					</div>
					<?php endif; ?>
					<?php if ($email) : ?>
					<div class="contact-block">
						<i class="tora-icon dslc-icon-ei-icon_mail_alt"></i><a href="mailto:<?php echo esc_html($email); ?>"><?php echo esc_html($email); ?></a>
					</div>
					<?php endif; ?>
					<?php if ($address) : ?>
					<div class="contact-block">
						<i class="tora-icon dslc-icon-ei-icon_pin_alt"></i><?php echo esc_html($address); ?>
					</div>
					<?php endif; ?>
				</div>
			</div>
			<div class="contact-mobile">
				<i class="tora-icon dslc-icon-ei-arrow_triangle-down_alt2"></i><?php echo esc_html($mobile_button); ?>
			</div>
		</div>			
	<?php }
}*/
//end tora override

// Enable shortcodes in WP Text Widget
add_filter( 'widget_text', 'shortcode_unautop');
add_filter( 'widget_text', 'do_shortcode', 11);
?>