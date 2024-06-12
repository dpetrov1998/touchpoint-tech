/**
 * External dependencies.
 */
import $ from 'jquery';

/**
 * Handle popup trigger's click.
 */
$('.js-popup-trigger').on('click', (event) => {
	event.preventDefault();

	$('.js-popup').toggleClass('is-active');
});

/**
 * Handle click on the popup close button.
 */
$('.js-popup-close').on('click', function (event) {
	const $target = $(this).closest('.js-popup');

	event.preventDefault();
	$target.removeClass('is-active');
});

/**
 * Handle outside click.
 */
$('.js-popup').on('click', (event) => {
	const $target = $(event.target);
	const isPopup = $target.hasClass('js-popup');

	if (!isPopup) {
		return;
	}

	event.preventDefault();
	$target.removeClass('is-active');
});

/**
 * Handle escape key.
 */
$(window).on('keydown', (event) => {
	const $currentPopup = $('.js-popup.is-active');
	const isEscape = event.code === 'Escape';

	if (!$currentPopup.length || !isEscape) {
		return;
	}

	$currentPopup.removeClass('is-active');
});
