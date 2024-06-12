<?php
define( 'TP_THEME_DIR', dirname( __FILE__ ) . DIRECTORY_SEPARATOR );

// Load composer dependencies
if ( ! file_exists( TP_THEME_DIR . 'vendor/autoload.php' ) ) {
	wp_die( 'The theme\'s PHP composer dependencies are missing.<br>Please add the <code>/themes/' . basename( TP_THEME_DIR ) . '/vendor</code> directory manually, or run this in your terminal:<pre>composer install</pre>' );
}
require_once TP_THEME_DIR . 'vendor/autoload.php';

// Translations and native theme features
include_once TP_THEME_DIR . 'includes/theme-support.php';

// Register options and load additional functionality
add_action( 'init', 'tp_init', 0 );
function tp_init() {
	include_once TP_THEME_DIR . 'options/menus.php';
	include_once TP_THEME_DIR . 'options/post-types.php';
	include_once TP_THEME_DIR . 'options/taxonomies.php';
	include_once TP_THEME_DIR . 'options/post-meta.php';

	include_once TP_THEME_DIR . 'includes/enqueues.php';
	include_once TP_THEME_DIR . 'includes/ajax.php';
	include_once TP_THEME_DIR . 'includes/helpers.php';
	include_once TP_THEME_DIR . 'includes/utilities.php';
}
