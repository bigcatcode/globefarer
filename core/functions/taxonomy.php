<?php


// Register Custom Taxonomy
function custom_taxonomy_business_areas() {

	$labels = array(
		'name'                       => _x( 'Business Areas', 'Business Areas', 'globefarer' ),
		'singular_name'              => _x( 'Business Areas', 'Business Areas', 'globefarer' ),
		'menu_name'                  => __( 'Business Areas', 'globefarer' ),
		'all_items'                  => __( 'All Items', 'globefarer' ),
		'parent_item'                => __( 'Parent Item', 'globefarer' ),
		'parent_item_colon'          => __( 'Parent Item:', 'globefarer' ),
		'new_item_name'              => __( 'New Item Name', 'globefarer' ),
		'add_new_item'               => __( 'Add New Item', 'globefarer' ),
		'edit_item'                  => __( 'Edit Item', 'globefarer' ),
		'update_item'                => __( 'Update Item', 'globefarer' ),
		'view_item'                  => __( 'View Item', 'globefarer' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'globefarer' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'globefarer' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'globefarer' ),
		'popular_items'              => __( 'Popular Items', 'globefarer' ),
		'search_items'               => __( 'Search Items', 'globefarer' ),
		'not_found'                  => __( 'Not Found', 'globefarer' ),
		'no_terms'                   => __( 'No items', 'globefarer' ),
		'items_list'                 => __( 'Items list', 'globefarer' ),
		'items_list_navigation'      => __( 'Items list navigation', 'globefarer' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => false,
		'show_admin_column'          => false,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'business_areas', array( 'post' ), $args );

}
add_action( 'init', 'custom_taxonomy_business_areas', 0 );

function custom_taxonomy_brands() {

	$labels = array(
		'name'                       => _x( 'Brands', 'Brands', 'globefarer' ),
		'singular_name'              => _x( 'Brands', 'Brands', 'globefarer' ),
		'menu_name'                  => __( 'Brands', 'globefarer' ),
		'all_items'                  => __( 'All Items', 'globefarer' ),
		'parent_item'                => __( 'Parent Item', 'globefarer' ),
		'parent_item_colon'          => __( 'Parent Item:', 'globefarer' ),
		'new_item_name'              => __( 'New Item Name', 'globefarer' ),
		'add_new_item'               => __( 'Add New Item', 'globefarer' ),
		'edit_item'                  => __( 'Edit Item', 'globefarer' ),
		'update_item'                => __( 'Update Item', 'globefarer' ),
		'view_item'                  => __( 'View Item', 'globefarer' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'globefarer' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'globefarer' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'globefarer' ),
		'popular_items'              => __( 'Popular Items', 'globefarer' ),
		'search_items'               => __( 'Search Items', 'globefarer' ),
		'not_found'                  => __( 'Not Found', 'globefarer' ),
		'no_terms'                   => __( 'No items', 'globefarer' ),
		'items_list'                 => __( 'Items list', 'globefarer' ),
		'items_list_navigation'      => __( 'Items list navigation', 'globefarer' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => false,
		'show_admin_column'          => false,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'brands', array( 'post' ), $args );

}
add_action( 'init', 'custom_taxonomy_brands', 0 );


function custom_taxonomy_services() {

	$labels = array(
		'name'                       => _x( 'Services', 'Services', 'globefarer' ),
		'singular_name'              => _x( 'Services', 'Services', 'globefarer' ),
		'menu_name'                  => __( 'Services', 'globefarer' ),
		'all_items'                  => __( 'All Items', 'globefarer' ),
		'parent_item'                => __( 'Parent Item', 'globefarer' ),
		'parent_item_colon'          => __( 'Parent Item:', 'globefarer' ),
		'new_item_name'              => __( 'New Item Name', 'globefarer' ),
		'add_new_item'               => __( 'Add New Item', 'globefarer' ),
		'edit_item'                  => __( 'Edit Item', 'globefarer' ),
		'update_item'                => __( 'Update Item', 'globefarer' ),
		'view_item'                  => __( 'View Item', 'globefarer' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'globefarer' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'globefarer' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'globefarer' ),
		'popular_items'              => __( 'Popular Items', 'globefarer' ),
		'search_items'               => __( 'Search Items', 'globefarer' ),
		'not_found'                  => __( 'Not Found', 'globefarer' ),
		'no_terms'                   => __( 'No items', 'globefarer' ),
		'items_list'                 => __( 'Items list', 'globefarer' ),
		'items_list_navigation'      => __( 'Items list navigation', 'globefarer' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => false,
		'show_admin_column'          => false,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'services', array( 'post' ), $args );

}
add_action( 'init', 'custom_taxonomy_services', 0 );
