<?php		

// Tax - Book Type
// ---------------------------

function tax_book_type() {

	$labels = array(
		'name'                       => _x( 'Book Types', 'Taxonomy General Name', 'back_to_front_author' ),
		'singular_name'              => _x( 'Book Type', 'Taxonomy Singular Name', 'back_to_front_author' ),
		'menu_name'                  => __( 'Book Type', 'back_to_front_author' ),
		'all_items'                  => __( 'All Items', 'back_to_front_author' ),
		'parent_item'                => __( 'Parent Item', 'back_to_front_author' ),
		'parent_item_colon'          => __( 'Parent Item:', 'back_to_front_author' ),
		'new_item_name'              => __( 'New Item Name', 'back_to_front_author' ),
		'add_new_item'               => __( 'Add New Item', 'back_to_front_author' ),
		'edit_item'                  => __( 'Edit Item', 'back_to_front_author' ),
		'update_item'                => __( 'Update Item', 'back_to_front_author' ),
		'view_item'                  => __( 'View Item', 'back_to_front_author' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'back_to_front_author' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'back_to_front_author' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'back_to_front_author' ),
		'popular_items'              => __( 'Popular Items', 'back_to_front_author' ),
		'search_items'               => __( 'Search Items', 'back_to_front_author' ),
		'not_found'                  => __( 'Not Found', 'back_to_front_author' ),
		'no_terms'                   => __( 'No items', 'back_to_front_author' ),
		'items_list'                 => __( 'Items list', 'back_to_front_author' ),
		'items_list_navigation'      => __( 'Items list navigation', 'back_to_front_author' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'book_type', array( 'books' ), $args );

}
add_action( 'init', 'tax_book_type', 0 );



// Tax - Book Format
// ---------------------------

function tax_book_format() {

	$labels = array(
		'name'                       => _x( 'Book Formats', 'Taxonomy General Name', 'back_to_front_author' ),
		'singular_name'              => _x( 'Book Format', 'Taxonomy Singular Name', 'back_to_front_author' ),
		'menu_name'                  => __( 'Book Format', 'back_to_front_author' ),
		'all_items'                  => __( 'All Items', 'back_to_front_author' ),
		'parent_item'                => __( 'Parent Item', 'back_to_front_author' ),
		'parent_item_colon'          => __( 'Parent Item:', 'back_to_front_author' ),
		'new_item_name'              => __( 'New Item Name', 'back_to_front_author' ),
		'add_new_item'               => __( 'Add New Item', 'back_to_front_author' ),
		'edit_item'                  => __( 'Edit Item', 'back_to_front_author' ),
		'update_item'                => __( 'Update Item', 'back_to_front_author' ),
		'view_item'                  => __( 'View Item', 'back_to_front_author' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'back_to_front_author' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'back_to_front_author' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'back_to_front_author' ),
		'popular_items'              => __( 'Popular Items', 'back_to_front_author' ),
		'search_items'               => __( 'Search Items', 'back_to_front_author' ),
		'not_found'                  => __( 'Not Found', 'back_to_front_author' ),
		'no_terms'                   => __( 'No items', 'back_to_front_author' ),
		'items_list'                 => __( 'Items list', 'back_to_front_author' ),
		'items_list_navigation'      => __( 'Items list navigation', 'back_to_front_author' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'book_format', array( 'books' ), $args );

}
add_action( 'init', 'tax_book_format', 0 );



// Tax - Book Publisher
// ---------------------------

function tax_book_publisher() {

	$labels = array(
		'name'                       => _x( 'Book Publishers', 'Taxonomy General Name', 'back_to_front_author' ),
		'singular_name'              => _x( 'Book Publisher', 'Taxonomy Singular Name', 'back_to_front_author' ),
		'menu_name'                  => __( 'Book Publisher', 'back_to_front_author' ),
		'all_items'                  => __( 'All Items', 'back_to_front_author' ),
		'parent_item'                => __( 'Parent Item', 'back_to_front_author' ),
		'parent_item_colon'          => __( 'Parent Item:', 'back_to_front_author' ),
		'new_item_name'              => __( 'New Item Name', 'back_to_front_author' ),
		'add_new_item'               => __( 'Add New Item', 'back_to_front_author' ),
		'edit_item'                  => __( 'Edit Item', 'back_to_front_author' ),
		'update_item'                => __( 'Update Item', 'back_to_front_author' ),
		'view_item'                  => __( 'View Item', 'back_to_front_author' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'back_to_front_author' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'back_to_front_author' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'back_to_front_author' ),
		'popular_items'              => __( 'Popular Items', 'back_to_front_author' ),
		'search_items'               => __( 'Search Items', 'back_to_front_author' ),
		'not_found'                  => __( 'Not Found', 'back_to_front_author' ),
		'no_terms'                   => __( 'No items', 'back_to_front_author' ),
		'items_list'                 => __( 'Items list', 'back_to_front_author' ),
		'items_list_navigation'      => __( 'Items list navigation', 'back_to_front_author' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'book_publisher', array( 'books' ), $args );

}
add_action( 'init', 'tax_book_publisher', 0 );



?>