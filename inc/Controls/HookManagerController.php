<?php
namespace Digidiscount\Affiliate\Controls;

use Digidiscount\Affiliate\Utils;

class HookManagerController{
    public function __construct() {
        add_action( 'woocommerce_after_shop_loop_item', [ $this, 'tnsb_display_custom_button_on_shop_page' ], 10 );

        return true;
    }

    function tnsb_display_custom_button_on_shop_page() {
        global $product;
        //get url from api products in future
    
        // Output your custom button HTML or code here
        echo '<a href="https://uk-go.kelkoogroup.net/sitesearchGo?.ts=1686497856184&.sig=F2_E60orbWJ_ueEq0cF9kM_aTpI-&affiliationId=96960479&comId=100498296&country=uk&offerId=1c7805ee0cb2efa7d0255f7cb2f14a13&searchId=1076100372538923_1686497856096_40277039&service=36&tokenId=34c02970-8a2c-49ff-90c2-2d5b3821d39b&custom1=1SPD111023061117cl3661174a689d" target="_blank" class="single_add_to_cart_button button alt wp-element-button" style="margin-top : 10px;">See the offer</a>';
    }

    
}