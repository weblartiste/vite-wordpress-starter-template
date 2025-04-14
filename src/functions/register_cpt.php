<?php

// CPT
function add_custom_post_types() {
  register_post_type( 'product', set_custom_post_types('Product', 'dashicons-products', 25));
}
add_action( 'init', 'add_custom_post_types' );

// TAXO
// function add_custom_taxonomies() {
//   register_taxonomy('product_category', array('model', 'product', 'tutorial', 'help', 'page'), set_custom_taxonomies('Product', 'Categories'));
// }
// add_action( 'init', 'add_custom_taxonomies');

function set_custom_post_types($name, $icon, $position, $rewrite = false) {
  $args = array(
    'labels'              => label_custom_post_types($name),
    'public'              => true,
    'has_archive'         => true,
    'hierarchical'        => false,
    'show_in_rest'        => true,
    'show_ui'             => true,
    'query_var'           => true,
    'supports'            => ['title', 'editor', 'thumbnail', 'capabilities'],
    'taxonomies'          => [ "category", "post_tag" ],
    'menu_icon'           => $icon,
    'menu_position'       => $position
  );

  $args['rewrite'] = $rewrite ? $rewrite : array('slug' => strtolower($name));

  return $args;
}


function firstCaps($str) {
    return ucfirst(strtolower($str));
}

function label_custom_post_types($name) {
  $labels = array(
    'name'                  => __( firstCaps($name) . 's', 'Post type general name', 'blank' ),
    'singular_name'         => __( firstCaps($name), 'Post type singular name', 'blank' ),
    'menu_name'             => __( firstCaps($name) . 's', 'Admin Menu text', 'blank' ),
    'name_admin_bar'        => __( firstCaps($name), 'Add New on Toolbar', 'blank' ),
    'add_new'               => __('Add a new ' . strtolower($name), 'blank'),
    'add_new_item'        => __('Add new ' . strtolower($name), 'blank'),
    'new_item'            => __('Nouveau ' . strtolower($name), 'blank'),
    'view_item'           => __('See ' . strtolower($name), 'blank'),
    'not_found'           => __('No ' . strtolower($name) . 's found', 'blank'),
    'not_found_in_trash'  => __('No ' . strtolower($name) . 's found in trash', 'blank'),
    'all_items'           => __('All ' . $name . 's', 'blank'),
    'insert_into_item'    => __('Insert into ' . strtolower($name), 'blank')

  );

  return $labels;
}

function set_custom_taxonomies($name, $menu_name) {
  $args = array(
    'hierarchical'      => true,
    'labels'            => label_custom_taxonomies($name, $menu_name),
    'with_front'        => false,
    'show_ui'           => true,
    'show_in_rest'      => true,
    'show_in_menu'      => true,
    'show_admin_column' => true,
    'query_var'         => true,
    // 'rewrite'           => array( 'slug' => strtolower($name) . '-category' ),
  );

  return $args;
}

function label_custom_taxonomies($name, $menu_name) {
  $labels = array(
    'name'              => __( $menu_name, 'blank' ),
    'singular_name'     => __( 'Category', 'blank' ),
    'search_items'      => __( 'Search Categories' ),
    'all_items'         => __( 'All Categories' ),
    'parent_item'       => __( 'Parent Category' ),
    'parent_item_colon' => __( 'Parent Category:' ),
    'edit_item'         => __( 'Edit Category' ),
    'update_item'       => __( 'Update Category' ),
    'add_new_item'      => __( 'Add New Category' ),
    'new_item_name'     => __( 'New Category Name' ),
    'menu_name'         => __( $menu_name ),
  );

  return $labels;
}
