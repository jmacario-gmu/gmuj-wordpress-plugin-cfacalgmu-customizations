<?php

/**
 * Summary: php file which implements the custom javascripts
 */


/**
 * Enqueue custom javascript
 */
add_action('wp_enqueue_scripts','gmuj_cfacalgmu_c_enqueue_scripts');
function gmuj_cfacalgmu_c_enqueue_scripts() {

  // Enqueue the custom javascript
  wp_enqueue_script(
    'gmuj_hyloncalgmu_c_js', //script name
    plugin_dir_url( __DIR__ ).'js/cfacalgmu-custom.js', //path to script
    array('jquery') //dependencies
  );

}
