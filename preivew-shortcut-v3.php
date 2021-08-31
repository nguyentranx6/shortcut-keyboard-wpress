<?php
/**
 * Plugin Name: Keyboard Shortcuts For Wordpress Admin
 * Plugin URI: www.johannguyen.dev
 * Description: This is very simple plugin, to create shortcut keyboard. Press key number 3 to
 * click preview post button, press key number 2 to open edit all post in wordpress admin.
 * Version: 3.0
 * Author: JohanNguyen
 * Author URI: www.johannguyen.dev
 * License: GPLv2
 * Note: Please dont remove credit author
 */

 add_action('wp_enqueue_scripts', 'key_shortcut');
add_action('admin_enqueue_scripts', 'key_shortcut');
 function key_shortcut(){
     wp_enqueue_script('key_shortcut', plugins_url( '/js/preview-shortcut-v2.js', __FILE__ ), array(), '1.0', true);
 };

 



