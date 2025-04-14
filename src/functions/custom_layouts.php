<?php

// MAIN MENU REGISTRATION
function menu_register()
{
  register_nav_menu('main-menu', __('Main Menu'));
}
add_action('init', 'menu_register');

// function sidebar_register() {
//     register_sidebar( array(
//         'name'			=> __( 'SideBar', 'blank' ),
//         'id'			=> 'sidebar',
//         'description'	=> __( 'SideBar.', 'blank' ),
//         'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
//         'after_widget'	=> '</div>',
//         'before_title'	=> '<div class="widget-title th3">',
//         'after_title'	=> '</div>',
//     ) );
// }
// add_action( 'widgets_init', 'sidebar_register' );