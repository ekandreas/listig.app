<?php
/**
 * Global init for theme Listig
 */

define('THEME_URI', get_stylesheet_directory_uri());

add_action('wp_enqueue_scripts', function () {
    $theme = wp_get_theme();
    wp_enqueue_style('theme-listig-css', assets('dist/app.css', ''), [], $theme->Version);
    wp_enqueue_script('them-listig-js', assets('dist/app.js', ''), [], $theme->Version, true);
});


function assets($filename, $assetsRoot = '/assets')
{
    if (preg_match('/dist\//', $filename)) {
        $manifest = json_decode(file_get_contents(__DIR__ . '/mix-manifest.json'), true);
        $filename = $manifest['/' . $filename];
    }

    $filename = $filename ? "/{$filename}" : "";
    $filename = str_replace('//', '/', $filename);

    return THEME_URI . $assetsRoot . $filename;
}


