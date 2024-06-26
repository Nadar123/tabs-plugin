<?php
/**
 * Enqueue the custom tabs script.
 *
 * This function is hooked into the 'wp_enqueue_scripts' action.
 * It enqueues a JavaScript file located in the 'dist' directory of the plugin.
 *
 * @return void
 */

function custom_tabs_enqueue_scripts() {
    wp_enqueue_script(
        'custom-tabs-script', //  handle  script.
        plugin_dir_url(__FILE__) . '../../dist/main.js',
        array(), // Array of script dependencies. 
        '1.0',
        true
    );

    wp_enqueue_style( 'typekit-fonts', 'https://p.typekit.net/p.css?s=1&k=wuz0gtr&ht=tk&f=139.175&a=87786064&app=typekit&e=css', array(), null );


}
// Enqueue the custom tabs script js an css.
add_action('wp_enqueue_scripts', 'custom_tabs_enqueue_scripts');