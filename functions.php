<?php

require_once get_stylesheet_directory() . '/inc/functions.php';

/**
 * Enqueue script and styles for child theme
 */
// function woodmart_child_enqueue_styles() {
// 	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'woodmart-style' ), woodmart_get_theme_info( 'Version' ) );
// }
// add_action( 'wp_enqueue_scripts', 'woodmart_child_enqueue_styles', 10010 );

//action hook to add new button for every product
// add_action('woocommerce_after_shop_loop_item', 'display_custom_button_on_shop_page', 5);
// function display_custom_button_on_shop_page() {
//     global $product;
// 	//get url from api products in future

//     // Output your custom button HTML or code here
//     echo '<a href="https://uk-go.kelkoogroup.net/sitesearchGo?.ts=1686497856184&.sig=F2_E60orbWJ_ueEq0cF9kM_aTpI-&affiliationId=96960479&comId=100498296&country=uk&offerId=1c7805ee0cb2efa7d0255f7cb2f14a13&searchId=1076100372538923_1686497856096_40277039&service=36&tokenId=34c02970-8a2c-49ff-90c2-2d5b3821d39b&custom1=1SPD111023061117cl3661174a689d" target="_blank" class="single_add_to_cart_button button alt wp-element-button" style="margin-top : 10px;">See the offer</a>';
// }
