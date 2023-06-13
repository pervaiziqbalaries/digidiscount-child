<?php 
namespace Digidiscount\Affiliate\Controls;

use Digidiscount\Affiliate\Utils;

class OffersController {
    public function __construct() {
        // add_filter('woocommerce_product_query', [ $this, 'replace_products_with_first_product']);
        // add_action( 'woocommerce_before_shop_loop_item', [ $this, 'tnsb_kelkoo_search_offers_list' ], 10 );
        add_filter( 'woocommerce_shortcode_products_data', [ $this, 'tnsb_replace_products' ], 10, 3 );
        //test
        return true;
    }

    function tnsb_replace_products($products_data, $attributes, $type){
        echo '<pre>';print_r($products_data);die('after');
    }

    function replace_products_with_first_product($q) {

    }

    public function tnsb_kelkoo_search_offers_list() {
        global $product;

        // Replace the product title
        $product->set_name('New Product Title');

        // Save the changes
        // $product->save();
        // // echo '<pre>';print_r($product);
        // echo '<div class="replacement-product">' . $product->get_title() . '</div>';
        
        // $result = $this->get_kelkoo_search_offers_list();
        // echo '<pre>';print_r($product->get_name());die('after');
        // $product = $result->offers[0];

    }
    private function get_kelkoo_search_offers_list() {

        $endpoint = Utils::api_url() . 'search/offers?country=uk&pageSize=1';

        $headers  = Utils::api_headers();

        try {
            $response = wp_remote_get( $endpoint, array(
                'headers' => $headers
            ) );

            if ( ( !is_wp_error($response)) && (200 === wp_remote_retrieve_response_code( $response ) ) ) {

                $responseBody = json_decode($response['body']);
                if( json_last_error() === JSON_ERROR_NONE ) {
                    return $responseBody;
                }

            }

        } catch( Exception $ex ) {
            //Handle Exception.
        }

    }

    
}