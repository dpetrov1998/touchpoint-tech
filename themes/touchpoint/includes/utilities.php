<?php 
add_action( 'pre_get_posts', 'tp_custom_album_archive_query' );
function tp_custom_album_archive_query( $query ) {
	if ( is_admin() || ! $query->is_main_query() || ! is_post_type_archive( 'tp_album' ) ) {
		return;
	}

	$show_albums = $_GET['show-albums'] ?? 'latest';

	$query->set( 'posts_per_page', 5 );
	$query->set( 'orderby', 'date' );
	$query->set( 'order', 'DESC' );

	if ( $show_albums !== 'latest' &&  $show_albums !== 'all' ) {
		$query->set( 'tax_query', [
			[
				'taxonomy' => 'tp_album_category',
				'field'    => 'slug',
				'terms'    => $show_albums,
			]
		]);
	}
}
