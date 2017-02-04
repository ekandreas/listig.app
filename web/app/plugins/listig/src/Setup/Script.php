<?php
namespace EkAndreas\Listig\Setup;

use EkAndreas\Listig\Menu\AdminMenu;

class Script
{
    public static function register($hook)
    {
        if (!in_array($hook, AdminMenu::pages())) {
            return;
        }
        wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_enqueue_style('listig_css', plugins_url('listig/assets/css/app.css'));

        wp_register_script('listig_js', plugins_url('listig/assets/js/app.js'), [], null, true);
        wp_localize_script('listig_js', 'wplang', \EkAndreas\Listig\Language\Script::translations());
        wp_enqueue_script('listig_js');

        if($hook=='toplevel_page_listig/main') {
            wp_register_script('listig_main_page_js', plugins_url('listig/assets/js/main-page.js'), [], null, true);
            wp_localize_script('listig_main_page_js', 'wplang', \EkAndreas\Listig\Language\Script::translations());
            wp_enqueue_script('listig_main_page_js');
        }

    }
}
