<?php 
function tp_file_upload( $file ) {
	if ( $file['error'] !== UPLOAD_ERR_OK ) {
		return new WP_Error( 'upload_error', 'File upload failed. Error code: ' . $file['error'] );
	}
	
	$attachment_id = media_handle_sideload( $file, 0 );

	if ( is_wp_error( $attachment_id ) ) {
		return new WP_Error( 'upload_error', 'Error uploading file: ' . $attachment_id->get_error_message() );
	}

	return $attachment_id;
}
