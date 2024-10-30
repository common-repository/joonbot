<?php

add_action('wp_head', 'add_joonbot_widget');

function add_joonbot_widget()
{
  // Ignore admin, feed, robots or trackbacks
  if ( is_feed() || is_robots() || is_trackback() )
  {
    return;
  }

  $options = get_option('Joonbot_settings');

  // If options is empty then exit
  if( empty( $options ) )
  {
    return;
  }

  // Check to see if Joonbot is enabled
  if ( esc_attr( $options['joonbot_enabled'] ) === "on" )
  {
    $joonbot_widget_script = $options['joonbot_widget_script'];
    
    // Insert widget code
    if ( '' != $joonbot_widget_script )
    {
      echo $joonbot_widget_script;
    }
  }
}
