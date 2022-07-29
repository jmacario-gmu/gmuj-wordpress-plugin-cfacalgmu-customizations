<?php

/**
 * Main plugin file for the Mason WordPress: cfacalgmu customizations plugin
 */

/**
 * Plugin Name:       Mason WordPress: cfacalgmu customizations
 * Author:            Jan Macario
 * Plugin URI:        https://github.com/jmacario-gmu/gmuj-wordpress-plugin-cfacalgmu-customizations
 * Description:       
 * Version:           0.9
 */


// Exit if this file is not called directly.
	if (!defined('WPINC')) {
		die;
	}

// Set up auto-updates
	require 'plugin-update-checker/plugin-update-checker.php';
	$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/jmacario-gmu/gmuj-wordpress-plugin-cfacalgmu-customizations/',
	__FILE__,
	'gmuj-wordpress-plugin-cfacalgmu-customizations'
	);

// Custom scripts
require('php/custom-scripts.php');

// Custom styles
require('php/custom-styles.php');
