<?php
define( 'TP_THEME_DIR', dirname( __FILE__ ) . DIRECTORY_SEPARATOR );

// Translations and native theme features
include_once TP_THEME_DIR . 'includes/theme-support.php';

// Register options and load additional functionality
add_action( 'init', 'tp_init', 0 );
function tp_init() {
	include_once TP_THEME_DIR . 'options/menus.php';
	include_once TP_THEME_DIR . 'options/post-types.php';
	include_once TP_THEME_DIR . 'options/taxonomies.php';

	include_once TP_THEME_DIR . 'includes/enqueues.php';
	// include_once TP_THEME_DIR . 'includes/helpers.php';
	// include_once TP_THEME_DIR . 'includes/utilities.php';
}
