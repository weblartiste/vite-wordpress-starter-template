<?php
$theme = wp_get_theme(); // Get theme version from style.css
define('THEME_VERSION', $theme->Version);

add_action('wp_enqueue_scripts', 'wp_enqueue');
function wp_enqueue() {
    $dist_path = get_template_directory() . '/../dist';
    $dist_uri = get_template_directory_uri() . '/../dist';

    if (defined('IS_VITE_DEVELOPMENT') && IS_VITE_DEVELOPMENT === true) {

        // insert hmr into head for live reload
        function vite_head_module_hook() {
            echo '<script type="module" crossorigin src="http://localhost:5173/src/assets/js/app.js"></script>';
        }
        add_action('wp_head', 'vite_head_module_hook');

    } else {

        // read manifest.json to figure out what to enqueue
        $manifest = json_decode( file_get_contents( $dist_path . '/.vite/manifest.json'), true );

        // is ok
        if (is_array($manifest)) {

            // get first key, by default is 'app.js' but it can change
            $manifest_key = array_keys($manifest);
            if (isset($manifest_key[0])) {

                // enqueue CSS files
                foreach(@$manifest[$manifest_key[0]]['css'] as $css_file) {
                    wp_enqueue_style( 'app', $dist_uri . '/' . $css_file, false, THEME_VERSION );
                }

                // enqueue app JS file
                $js_file = @$manifest[$manifest_key[0]]['file'];
                if ( ! empty($js_file)) {
                    wp_enqueue_script( 'app', $dist_uri . '/' . $js_file, array('jquery'), THEME_VERSION, true );
                }

            }

        }

    }

    wp_localize_script( 'site_app_js', 'site_app_js', array(
      'nonce'    => wp_create_nonce( 'app' ),
      'ajax_url' => admin_url( 'admin-ajax.php' )
    ));
}

// ADMIN CSS tweak if needed
add_action( 'admin_enqueue_scripts', 'admin_css' );
function admin_css()
{
  wp_enqueue_style( 'admin_css', get_template_directory_uri() . '/assets/admin/admin.css', false, THEME_VERSION );
}