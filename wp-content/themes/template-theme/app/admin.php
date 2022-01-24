<?php

namespace App;

/**
 * Theme customizer
 */
add_action('customize_register', function (\WP_Customize_Manager $wp_customize) {
    // Add postMessage support
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->selective_refresh->add_partial('blogname', [
        'selector' => '.brand',
        'render_callback' => function () {
            bloginfo('name');
        }
    ]);
});

add_action('admin_enqueue_scripts', function() {
    $theme = get_option('stylesheet');

    wp_enqueue_script("{$theme}/admin", asset_path('scripts/admin.js'), [], null, true);
    wp_enqueue_style("{$theme}/admin", asset_path('styles/admin.css'));
});
