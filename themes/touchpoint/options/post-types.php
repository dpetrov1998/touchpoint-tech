<?php
register_post_type( 'tp_album', array(
	'labels' => array(
		'name' => __( 'Albums', 'tp' ),
		'singular_name' => __( 'Album', 'tp' ),
		'add_new' => __( 'Add New', 'tp' ),
		'add_new_item' => __( 'Add new Album', 'tp' ),
		'view_item' => __( 'View Album', 'tp' ),
		'edit_item' => __( 'Edit Album', 'tp' ),
		'new_item' => __( 'New Album', 'tp' ),
		'search_items' => __( 'Search Albums', 'tp' ),
		'not_found' =>  __( 'No Albums found', 'tp' ),
		'not_found_in_trash' => __( 'No Albums found in trash', 'tp' ),
	),
	'public' => true,
	'exclude_from_search' => false,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'_edit_link' => 'post.php?post=%d',
	'rewrite' => array(
		'slug' => 'albums',
		'with_front' => false,
	),
	'query_var' => true,
	'menu_icon' => 'dashicons-images-alt2',
	'supports' => array( 'title' ),
) );

