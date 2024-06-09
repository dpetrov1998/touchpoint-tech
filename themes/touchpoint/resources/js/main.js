/**
 * External dependencies
 */
import $ from 'jquery';

$('.js-toggle').on('click', function() {
	$(this).toggleClass('is-active');

	$('.js-menu').toggleClass('is-active');

	$('body').toggleClass('is-active');
});
