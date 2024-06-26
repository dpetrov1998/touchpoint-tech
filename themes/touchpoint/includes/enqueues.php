<?php
add_action('wp_enqueue_scripts', 'tp_enqueue_scripts');
function tp_enqueue_scripts() {
	$version = wp_get_theme()->get( 'Version' );

	$script_url = get_template_directory_uri() . '/dist/main.js';
	wp_enqueue_script( 'tp-script', $script_url, [], $version, true );

	$style_url = get_template_directory_uri() . '/dist/theme.css';
	wp_enqueue_style( 'tp-style', $style_url, [], $version );

	wp_localize_script( 'tp-script', 'TPVars', [
		'ajaxUrl' => admin_url( 'admin-ajax.php' ),
	] );
}

wp_enqueue_script( 'jquery' );
