<?php
/*
Plugin Name: Listig
Plugin URI:  https://github.com/ekandreas/listig/
Description: List Manager
Version:     20170204
Author:      Andreas Ek
Author URI:  https://www.elseif.se/
License:     MIT
License URI: https://opensource.org/licenses/MIT
Text Domain: listig
Domain Path: /languages
*/

require_once 'vendor/autoload.php';

add_action( 'admin_init', function(){
    load_plugin_textdomain( 'listig', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
});

add_action( 'admin_menu', 'EkAndreas\Listig\Menu\AdminMenu::register' );
add_action( 'admin_enqueue_scripts', 'EkAndreas\Listig\Setup\Script::register' );
