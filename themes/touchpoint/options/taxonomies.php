<?php
register_taxonomy(
	'tp_album_category',
	[ 'tp_album' ],
	[
		'labels'            => [
			'name'              => __( 'Categories', 'tp' ),
			'singular_name'     => __( 'Category', 'tp' ),
			'search_items'      => __( 'Search Categories', 'tp' ),
			'all_items'         => __( 'All Categories', 'tp' ),
			'parent_item'       => __( 'Parent Category', 'tp' ),
			'parent_item_colon' => __( 'Parent Category:', 'tp' ),
			'view_item'         => __( 'View Category', 'tp' ),
			'edit_item'         => __( 'Edit Category', 'tp' ),
			'update_item'       => __( 'Update Category', 'tp' ),
			'add_new_item'      => __( 'Add New Category', 'tp' ),
			'new_item_name'     => __( 'New Category Name', 'tp' ),
			'menu_name'         => __( 'Categories', 'tp' ),
		],
		'hierarchical'      => true,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'album-categories' ),
	]
);
