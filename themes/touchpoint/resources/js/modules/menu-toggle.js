/**
 * External dependencies
 */
import $ from 'jquery';

/**
 * Handle menu toggle click.
 */
$('.js-toggle').on('click', function() {
	$(this).toggleClass('is-active');

	$('.js-menu').toggleClass('is-active');
});
