<?php
namespace Digidiscount\Affiliate\Controls;

use Digidiscount\Affiliate\Utils;

class AssetController{
    public function __construct() {
        add_action( 'wp_enqueue_scripts', [ $this, 'tnsb_enqueueCSS' ], 10 );

        return true;
    }

    public function tnsb_enqueueCSS(){
        // wp_register_style( 'tnsb-child-style', Utils::child_dir(). '/style.css', array( 'woodmart-style' ), woodmart_get_theme_info( 'Version' ) );
        // wp_enqueue_style( 'tnsb-child-style' );
        wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'woodmart-style' ), woodmart_get_theme_info( 'Version' ) );
    }

    
}