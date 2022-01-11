<?php
/*
Plugin Name: Block Based 404
Plugin URI: https://www.graemetgweb.com
Description: Adds the ability to add social profiles to a site and output them as a widget.
Version: 1.0
License: GPL-2.0+
Author: Highrise Digital Ltd
Author URI: https://highrise.digital/
Text domain: hd-extensible-social-profiles-widget

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/* exist if directly accessed */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// define variable for path to this plugin file.
define( 'GTG_BBFOF_LOCATION', dirname( __FILE__ ) );
define( 'GTG_BBFOF_LOCATION_URL', plugins_url( '', __FILE__ ) );

// load in the loader file which loads everything up.
require_once( dirname( __FILE__) . '/inc/loader.php' );