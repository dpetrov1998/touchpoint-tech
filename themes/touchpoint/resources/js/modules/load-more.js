/**
 * External dependencies.
 */
import $ from 'jquery';
let isAjaxLoading = false;

/**
 * Handle load more on scroll.
 */
$(window).scroll( function() {
	if (isAjaxLoading || ! isInView($('.js-load-more'))) {
		return;
	}

	const $this = $('.js-load-more');
	let paged = $this.attr('data-paged');
	let url = new URL(document.location.href);

	url.searchParams.set( 'paged', parseInt( paged ) + 1 );

	$.ajax({
		url,
		beforeSend: function () {
			isAjaxLoading = true;
		},
		success: function (response) {
			$('.js-load-more').remove();

			$('.js-gallery').append( $(response).find('.js-gallery').html() );
		},
		error: function (error) {
			console.error(error);
		},
		complete: function () {
			isAjaxLoading = false;
		},
	});
});


/**
 * Check if element is in view
 *
 * @param {jQuery} element
 * @returns {Bool}
 */
function isInView(element) {
	if ($(element).length) {
		const docViewTop = $(window).scrollTop();
		const docViewBottom = docViewTop + $(window).height();
		const elementTop = $(element).offset().top;

		return ((elementTop <= docViewBottom) && (elementTop >= docViewTop));
	}

	return false;
}
