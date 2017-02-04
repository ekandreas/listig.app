<?php
namespace EkAndreas\Listig\Menu;

use EkAndreas\Listig\Page\MainPage;

class AdminMenu {

    public static function register() {

        add_menu_page(
            'Listig',
            'Listig',
            'manage_options',
            'listig/main',
            'EkAndreas\Listig\Menu\AdminMenu::main',
            'dashicons-editor-ul', 33
        );

    }

    public static function main() {
        $mainPage = new MainPage();
        echo $mainPage->view();
    }

}