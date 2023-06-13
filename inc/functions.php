<?php
require_once get_stylesheet_directory() . '/src/Utils.php';
require_once get_stylesheet_directory() . '/src/Digidiscount.php';

use Digidiscount\Affiliate\Digidiscount;
use Digidiscount\Affiliate\Utils;

$pulgin_path = Utils::plugin_path();

if (class_exists(Digidiscount::class)) {
    new Digidiscount();
}
// die($pulgin_path);
