<?php
/*
Plugin Name:  Total Design Development Utilities
Description:  Utilities which make development a bit more comfortable.
Version:      0.1.0
Author:       Total Design
Author URI:   https://www.totaldesign.com/
License:      MIT
*/

/**
 * If log level is set to E_ALL we would like to hide E_DEPRECATED as they make
 * development nearly impossible in WordPress under PHP 8.1.
 */
call_user_func( function() {
	$error_level = error_reporting();
	if ( $error_level === E_ALL ) {
		error_reporting( E_ALL & ~E_DEPRECATED );
	}
} );
