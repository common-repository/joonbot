<?php

// Register settings
function Joonbot_register_settings()
{
  register_setting( 'Joonbot_settings_group', 'Joonbot_settings' );
}
add_action( 'admin_init', 'Joonbot_register_settings' );

// Delete options on uninstall
function Joonbot_uninstall()
{
  delete_option( 'Joonbot_settings' );
}
register_uninstall_hook( __FILE__, 'Joonbot_uninstall' );


?>
