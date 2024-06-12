/**
 * External dependencies
 */
import $ from 'jquery';

/**
 * Handle secondary nav click.
 */
$('.js-secondary-nav').on('click', 'a', (event) => {
	event.preventDefault();

	const $this = $(event.target);
	let $parent = $this.parent();

	if ($parent.hasClass('is-active')) {
		return;
	}

	const slug = $this.attr('data-slug');
	let url = document.location.href;

	url = new URL(url);
    url.searchParams.set( 'show-albums', slug );

	$.ajax({
		url,
		method: 'GET',
		success: function(response) {
			$parent.siblings().removeClass('is-active');
			$parent.addClass('is-active');

			$('.js-gallery').html( $(response).find('.js-gallery').html() );

			window.history.pushState(null,null,url);
		},
		error: function(xhr, status, error) {
			console.error(error);
		}
	});
});
