<?php 
namespace Digidiscount\Affiliate;

require_once get_stylesheet_directory() . '/src/Controls/AssetController.php';
require_once get_stylesheet_directory() . '/src/Controls/HookManagerController.php';
require_once get_stylesheet_directory() . '/src/Controls/OffersController.php';

use Digidiscount\Affiliate\Controls\AssetController;
use Digidiscount\Affiliate\Controls\HookManagerController;
use Digidiscount\Affiliate\Controls\OffersController;

/**
 * Class Utils
 *
 * It provides Plugin's Meta information
 *
 * @package digidiscount\affiliate;
 */

 class Digidiscount {

    public function __construct() {
        new AssetController();
        new HookManagerController();
        new OffersController();
    }

 }