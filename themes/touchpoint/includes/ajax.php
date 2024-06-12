<?php 
add_action('wp_ajax_tp_handle_file_upload', 'tp_handle_file_upload');
add_action('wp_ajax_nopriv_tp_handle_file_upload', 'tp_handle_file_upload');

function tp_handle_file_upload() {
	if ( empty( $_POST['title'] ) || empty( $_FILES['files'] ) ) {
		wp_send_json_error( 'Title or files are missing.' );
		return;
	}

	$title = sanitize_text_field( $_POST['title'] );
	$files = $_FILES['files'];

	$post_id = wp_insert_post( [
		'post_title' => $title,
		'post_type' => 'tp_album',
		'post_status' => 'publish',
	] );

	if ( is_wp_error( $post_id ) ) {
		wp_send_json_error( 'Failed to create album post.' );
		return;
	}

	foreach ( $files['name'] as $index => $file_name ) {
		$file = [
			'name'     => $file_name,
			'type'     => $files['type'][$index],
			'tmp_name' => $files['tmp_name'][$index],
			'error'    => $files['error'][$index],
			'size'     => $files['size'][$index]
		];

		$attachment_id = tp_handle_blob_upload( $file );

		if ( is_wp_error( $attachment_id ) ) {
			wp_send_json_error( 'Failed to upload file: ' . $attachment_id->get_error_message() );
			return;
		}

		update_post_meta( $post_id, '_tp_album_gallery|||'. $index .'|value', $attachment_id );
	}
	
	wp_send_json_success( 'Album created successfully.' );
	wp_die();
}
