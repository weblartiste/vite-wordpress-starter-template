<?php
/**
 * SET CURRENT LANG GLOBAL (POLYLANG)
 */
function set_current_language() {
    $current_lang = pll_current_language();
    define("CURRENT_LANG", $current_lang);
}
add_action( 'init', 'set_current_language' );

add_action('init', function() {
    // REGISTER STRINGS
    pll_register_string('weblartiste', 'About', 'blank');
    pll_register_string('weblartiste', 'Products', 'blank');
    pll_register_string('weblartiste', 'Nos catalogues', 'blank');

    // USE STRINGS
    // pll__('Produits consultés');
});