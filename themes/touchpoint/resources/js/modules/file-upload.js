/**
 * External dependencies.
 */
import $ from 'jquery';

/**
 * Handle album upload.
 */
$('.js-upload').on('click', (event) => {
	event.preventDefault();

	const title = $('.js-upload-title-input').val();
	const fileInput = $('.js-upload-input')[0];
	const files = fileInput.files;
	const data = new FormData();

	for (let i = 0; i < files.length; i++) {
		data.append('files[]', files[i]);
	}

	data.append('title', title);
	data.append('action', 'tp_handle_file_upload');

	$.ajax({
		url: TPVars.ajaxUrl,
		method: 'POST',
		data,
		contentType: false,
		processData: false,
		success: function(response) {
			const $fileMessage = $('.file__message');

			$fileMessage.html(response.data).removeClass('success error');

			if ( response.success ) {
				$fileMessage.addClass('success');
				location.reload();
			} else {
				$fileMessage.addClass('error');
			}
		},
		error: function(xhr, status, error) {
			console.error(error);
		}
	});
});
