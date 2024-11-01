<?php
/*
Plugin Name: wpSpade Retina Images
Plugin URI: https://wordpress.com/plugins/wpspade-retina-images
Description: An ultra lightweight solution for sharp retina images on any device from desktop to mobile! No need to configure any options. 4.4+ ready.
Version: 0.1
Author: wpSpade
Author URI: https://themeforest.net/user/wpspade
License: GPLv2 or later
Text Domain: wpspd-retina
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

Copyright 2017 wpSpade.
*/

if ( !defined( 'ABSPATH' ) ) exit;

// Filter the image "srcset"
add_filter( 'wp_calculate_image_srcset', 'wpspd_calculate_image_srcset', 10 );

/**
 * Modify default values in the array
 *
 * @since 0.1
 *
 * @param 	array 	$srcset 	Pre-defined sizes
 * @return 	array 	$srcset 	Modified sizes
 */
function wpspd_calculate_image_srcset( $srcset ) {
	foreach ( $srcset as $key => $v ) {
		// This is where all magic appears
		$srcset[ $key ][ 'value' ] = round( $key / 2 );
	}

	return $srcset;
}