<?php

# Custom hierarchical taxonomy (like categories)
/*
register_taxonomy(
	'custom_taxonomy', # Taxonomy name
	array( 'post_type' ), # Post Types
	array( # Arguments
		'labels'            => array(
			'name'              => __( 'Custom Taxonomies', 'tp' ),
			'singular_name'     => __( 'Custom Taxonomy', 'tp' ),
			'search_items'      => __( 'Search Custom Taxonomies', 'tp' ),
			'all_items'         => __( 'All Custom Taxonomies', 'tp' ),
			'parent_item'       => __( 'Parent Custom Taxonomy', 'tp' ),
			'parent_item_colon' => __( 'Parent Custom Taxonomy:', 'tp' ),
			'view_item'         => __( 'View Custom Taxonomy', 'tp' ),
			'edit_item'         => __( 'Edit Custom Taxonomy', 'tp' ),
			'update_item'       => __( 'Update Custom Taxonomy', 'tp' ),
			'add_new_item'      => __( 'Add New Custom Taxonomy', 'tp' ),
			'new_item_name'     => __( 'New Custom Taxonomy Name', 'tp' ),
			'menu_name'         => __( 'Custom Taxonomies', 'tp' ),
		),
		'hierarchical'      => true,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'custom-taxonomy' ),
	)
);

# Custom non-hierarchical taxonomy (like tags)
register_taxonomy(
	'custom_taxonomy', # Taxonomy name
	array( 'post_type' ), # Post Types
	array( # Arguments
		'labels'            => array(
			'name'                       => __( 'Custom Taxonomies', 'tp' ),
			'singular_name'              => __( 'Custom Taxonomy', 'tp' ),
			'search_items'               => __( 'Search Custom Taxonomies', 'tp' ),
			'popular_items'              => __( 'Popular Custom Taxonomies', 'tp' ),
			'all_items'                  => __( 'All Custom Taxonomies', 'tp' ),
			'view_item'                  => __( 'View Custom Taxonomy', 'tp' ),
			'edit_item'                  => __( 'Edit Custom Taxonomy', 'tp' ),
			'update_item'                => __( 'Update Custom Taxonomy', 'tp' ),
			'add_new_item'               => __( 'Add New Custom Taxonomy', 'tp' ),
			'new_item_name'              => __( 'New Custom Taxonomy Name', 'tp' ),
			'separate_items_with_commas' => __( 'Separate Custom Taxonomies with commas', 'tp' ),
			'add_or_remove_items'        => __( 'Add or remove Custom Taxonomies', 'tp' ),
			'choose_from_most_used'      => __( 'Choose from the most used Custom Taxonomies', 'tp' ),
			'not_found'                  => __( 'No Custom Taxonomies found.', 'tp' ),
			'menu_name'                  => __( 'Custom Taxonomies', 'tp' ),
		),
		'hierarchical'          => false,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'custom-taxonomy' ),
	)
);
*/
