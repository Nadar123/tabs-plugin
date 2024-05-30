<?php

// Hook the function into the 'admin_menu' action.
add_action('admin_menu', 'my_plugin_menu');

/**
 * Add an option page to the WordPress admin menu.
 *
 * This function uses the add_options_page function to add a new page to the settings menu in WordPress.
 * The new page will have the title 'My Plugin Options', the menu title 'My Plugin', and the menu slug 'my-plugin'.
 * The 'my_plugin_options' function will be used to render the page.
 *
 * @return void
 */

function my_plugin_menu() {
   add_options_page(
    'My Plugin Options', // Page title.
    'My Plugin', // Menu title.
    'manage_options', // Capability required to see the page.
    'my-plugin', // Menu slug.
    'my_plugin_options' // Function to render the page.
  );
}

/**
 * Render the options page for the plugin.
 *
 * This function checks if the current user has the 'manage_options' capability. 
 * If not, it displays an error message.
 * @return void
 */

function my_plugin_options() {
  // Check if the current user can manage options.
  if (!current_user_can('manage_options'))  {
    wp_die(__('You do not have sufficient permissions to access this page.'));
  }
  // Display a placeholder message.
  echo '<div class="wrap">';
  echo '<p>Here is where the form would go if I actually had options.</p>';
  echo '</div>';
}