<?php

/**
 * Summary: php file which implements the custom stylesheets
 */


/**
 * Enqueue custom CSS
 */
add_action('wp_enqueue_scripts', 'gmuj_cfacalgmu_c_enqueue_styles');
function gmuj_cfacalgmu_c_enqueue_styles() {

  // Enqueue the custom stylesheets
  wp_enqueue_style(
    'gmuj_cfacalgmu_c_css', //stylesheet name
    plugin_dir_url( __DIR__ ).'css/cfacalgmu-custom.css' //path to stylesheet
  );

}
