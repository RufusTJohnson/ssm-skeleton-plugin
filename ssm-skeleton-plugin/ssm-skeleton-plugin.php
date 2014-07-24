<?php
/*
Plugin Name: Skeleton-Header-Plugin-Name
Plugin URI: http://skeleton-header-plugin-uri.com/
Description: Skeleton-Header-Description
Author: Skeleton-Header-Author
Author URI: http://skeleton-header-author-uri.com/
License: GPLv2 or later
Text Domain: Skeleton-Header-Test-Domain
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/


// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

define( 'SKELETON_PLUGIN_NAME', "Skeleton");
define( 'SKELETON_VERSION', '1.0.0' );
define( 'SKELETON__MINIMUM_WP_VERSION', '3.0' );
define( 'SKELETON__PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'SKELETON__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'SKELETON_DELETE_LIMIT', 100000 );

if (true)
{

	require_once( SKELETON__PLUGIN_DIR . '/classes/base_support.php' );
	require_once( SKELETON__PLUGIN_DIR . '/classes/support.php' );
	
	
	add_action( 'init', array( '__CLASSNAMEPREFIX_Support', 'init' ) );
	
	if ( is_admin() ) {
		require_once( SKELETON__PLUGIN_DIR . '/classes/admin-support.php' );
		add_action( 'init', array( '__CLASSNAMEPREFIX_Admin_Support', 'init' ) );
		
		register_activation_hook( __FILE__, array( '__CLASSNAMEPREFIX_Admin_Support', 'plugin_activation' ) );
		register_deactivation_hook( __FILE__, array( '__CLASSNAMEPREFIX_Admin_Support', 'plugin_deactivation' ) );
	}
}

?>