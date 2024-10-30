<?php

// Create a option page for settings
add_action('admin_menu', 'add_joonbot_option_page');

// Add top-level admin bar link
add_action('admin_bar_menu', 'add_joonbot_link_to_admin_bar', 999);

// Adds Joonbot link to top-level admin bar
function add_joonbot_link_to_admin_bar()
{
  global $wp_version;
  global $wp_admin_bar;

  $args = array(
    'id' => 'joonbot-admin-menu',
    'title' => '<span class="ab-label">Joonbot</span>', // alter the title of existing node
    'parent' => FALSE,   // set parent to false to make it a top level (parent) node
    'href' => get_bloginfo('wpurl') . '/wp-admin/admin.php?page=menus.php',
    'meta' => array('title' => 'Joonbot')
  );

  $wp_admin_bar->add_node($args);
}

// Hook in the options page functionå
function add_joonbot_option_page()
{
  add_options_page('Joonbot Options', 'Joonbot', 'activate_plugins', basename(__FILE__), 'joonbot_options_page');
}

?>
