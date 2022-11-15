<?php
/*
Plugin Name: Defined Hosting | Smart Users
Plugin URI: http://www.definedhosting.co.uk/plugins
Description: User management for Smart Numbers
Author: R. Cush
Version: 1.0.4
Author URI: https://www.definedhosting.co.uk
GitHub Plugin URI: DefinedHosting/dh-smart-users
GitHub Plugin URI: https://github.com/DefinedHosting/dh-smart-users
*/

include_once('dh-smart-users.php');
register_activation_hook( __FILE__, 'dh_su_plugin_activated' );
add_action( 'upgrader_process_complete', 'dh_su_plugin_update',10, 2);
