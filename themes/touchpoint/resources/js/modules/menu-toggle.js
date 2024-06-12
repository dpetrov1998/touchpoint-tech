/**
 * External dependencies
 */
import $ from 'jquery';

/**
 * Handle menu toggle click.
 */
$('.js-toggle').on('click', (event) => {
	$(event.target).toggleClass('is-active');

	$('.js-menu').toggleClass('is-active');
});
