<?php

// // Hook the function into the 'admin_menu' action.
// add_action('admin_menu', 'my_plugin_menu');

// function my_plugin_menu() {
//    add_options_page(
//     'My Plugin Options', // Page title.
//     'My Plugin', // Menu title.
//     'manage_options', // Capability required to see the page.
//     'my-plugin', // Menu slug.
//     'my_plugin_options' // Function to render the page.
//   );
// }

// function my_plugin_options() {
//   // Check if the current user can manage options.
//   if (!current_user_can('manage_options'))  {
//     wp_die(__('You do not have sufficient permissions to access this page.'));
//   }
//   // Display a placeholder message.
//   echo '<div class="wrap">';
//   echo '<p>Here is where the form would go if I actually had options.</p>';
//   echo '</div>';
// }


if(function_exists('acf_add_options_page')) {
  acf_add_options_page(array(
    'page_title'    => 'Theme General Settings',
    'menu_title'    => 'Theme Settings',
    'menu_slug'     => 'theme-general-settings',
    'capability'    => 'edit_posts',
    'redirect'      => false
  ));
}