<?php
/*
Plugin Name: MR Hide Admin Bar
Plugin URI: https://mikerojas.com/plugins/hide-admin-bar/
Description: Hides the WP Admin Bar.
Author: Mike Rojas
Version: 0.1.1
Author URI: https://mikerojas.com/
*/

/**
 * Hide WP Admin Bar on the front end whe user ise logged in.
 * 
 * @todo Add some settings for this (maybe limit to specific roles, add a custom admin bar)
 *
 * @return void
 */
function mr_hide_admin_bar()
{
  return false;
}
add_filter('show_admin_bar', 'mr_hide_admin_bar');
