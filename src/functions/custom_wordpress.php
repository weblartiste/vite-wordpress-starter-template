<?php

// DISABLE ITEMS
// add_action( 'admin_init', 'custom_admin' );
// function custom_admin() {
//   remove_menu_page('edit.php'); // Posts
//   remove_menu_page('edit-comments.php'); // Comments
// }


/* Change WordPress Admin Login Logo */
add_action( 'login_enqueue_scripts', 'login_logo_change' );
function login_logo_change() {

  $logo_url = get_template_directory_uri() . '/assets/img/logo/logo.png';

   ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
           background-image: url(<?= $logo_url ?>);
           width: 100px;
           height: 100px;
           background-size: contain;
           background-repeat: no-repeat;
           background-color: transparent;
      }
    </style>
   <?php
}

// ADD IMAGE COLUMN TO PRODUCT POST TYPE (manage_POSTYPENAME_posts_columns)
add_filter( 'manage_product_posts_columns', 'product_header_columns', 10, 1 );
function product_header_columns($columns) {
    $new_columns = array();
    if ( isset( $columns['cb'] ) ) {
        $new_columns['cb'] = $columns['cb'];
        unset( $columns['cb'] );
    }
    $new_columns['image'] = '<span class="aw-column-icon">' . __( 'Image', 'blank') . '</span>';
    $columns           = array_merge( $new_columns, $columns );
    return $columns;
}

add_filter( 'manage_product_posts_custom_column', 'product_column', 10, 2 );
function product_column($column_name, $id) {
    if ($column_name === 'image') {
        echo '<a href="' . get_edit_post_link() . '">';
        the_post_thumbnail( [50, 50] );
        echo '</a>';
    }
}