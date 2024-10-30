<?php
/*
 * Plugin Name: Chatbot to boost conversions
 * Version: 2.1.0
 * Description: Chatbots for lead generation, sales and data collection.
 * Author: Joonbot
 * Author URI: https://www.joonbot.com/?ref=wordpress
 * Plugin URI: https://www.joonbot.com
 */

// Prevent Direct Access
defined('ABSPATH') or die("Restricted access!");

/*
* Define
*/
define('JOONBOT_VERSION', '2.1.0');
define('JOONBOT_DIR', plugin_dir_path(__FILE__));
define('JOONBOT_URL', plugin_dir_url(__FILE__));
defined('JOONBOT_PATH') or define('JOONBOT_PATH', untrailingslashit(plugins_url('', __FILE__)));

require_once(JOONBOT_DIR . 'includes/core.php');
require_once(JOONBOT_DIR . 'includes/menus.php');
require_once(JOONBOT_DIR . 'includes/admin.php');
require_once(JOONBOT_DIR . 'includes/embed.php');


?>
