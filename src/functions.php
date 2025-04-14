<?php

// Switch from a Vite dev server and production built files
// Recommended to move it into wp-config.php
define('IS_VITE_DEVELOPMENT', true);


// ENQUEUE SCRIPTS AND STYLES
include get_theme_file_path( '/functions/enqueue_script_style.php' );

// CPT SETUP
include get_theme_file_path( '/functions/register_cpt.php' );

// CUSTOM WORDPRESS SETUP
include get_theme_file_path( '/functions/custom_wordpress.php' );

// CUSTOM LAYOUTS SETUP
include get_theme_file_path( '/functions/custom_layouts.php' );

// POLYLANG SETUP
include get_theme_file_path( '/functions/polylang.php' );

// MAILJET API SETUP (COMPOSER DEMO)
// include get_theme_file_path( '/functions/composer_demo.php' );