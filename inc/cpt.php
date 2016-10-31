<?php 

// CPT - Books
// --------------------------

function cpt_books() {

	$labels = array(
		'name'                  => _x( 'Books', 'Post Type General Name', 'back_to_front_author' ),
		'singular_name'         => _x( 'Book', 'Post Type Singular Name', 'back_to_front_author' ),
		'menu_name'             => __( 'Books', 'back_to_front_author' ),
		'name_admin_bar'        => __( 'Books', 'back_to_front_author' ),
		'archives'              => __( 'Item Archives', 'back_to_front_author' ),
		'parent_item_colon'     => __( 'Parent Item:', 'back_to_front_author' ),
		'all_items'             => __( 'All Items', 'back_to_front_author' ),
		'add_new_item'          => __( 'Add New Item', 'back_to_front_author' ),
		'add_new'               => __( 'Add New', 'back_to_front_author' ),
		'new_item'              => __( 'New Item', 'back_to_front_author' ),
		'edit_item'             => __( 'Edit Item', 'back_to_front_author' ),
		'update_item'           => __( 'Update Item', 'back_to_front_author' ),
		'view_item'             => __( 'View Item', 'back_to_front_author' ),
		'search_items'          => __( 'Search Item', 'back_to_front_author' ),
		'not_found'             => __( 'Not found', 'back_to_front_author' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'back_to_front_author' ),
		'featured_image'        => __( 'Featured Image', 'back_to_front_author' ),
		'set_featured_image'    => __( 'Set featured image', 'back_to_front_author' ),
		'remove_featured_image' => __( 'Remove featured image', 'back_to_front_author' ),
		'use_featured_image'    => __( 'Use as featured image', 'back_to_front_author' ),
		'insert_into_item'      => __( 'Insert into item', 'back_to_front_author' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'back_to_front_author' ),
		'items_list'            => __( 'Items list', 'back_to_front_author' ),
		'items_list_navigation' => __( 'Items list navigation', 'back_to_front_author' ),
		'filter_items_list'     => __( 'Filter items list', 'back_to_front_author' ),
	);
	$args = array(
		'label'                 => __( 'Book', 'back_to_front_author' ),
		'description'           => __( 'For adding books', 'back_to_front_author' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', ),
		'taxonomies'            => array( ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-book-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'books', $args );

}
add_action( 'init', 'cpt_books', 0 );

?>