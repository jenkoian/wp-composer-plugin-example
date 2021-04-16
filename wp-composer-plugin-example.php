<?php
/**
 * Plugin Name: WP Composer Plugin Example
 * Description: An example of a plugin using composer.
 * Version:     0.0.1
 *
 * @package Jenko\Plugin\Example
 */

declare ( strict_types=1 );

namespace Jenko\Plugin\Example;

// Include composer autoloader from this plugin dir if it exists, otherwise assume the autoloader is already included.
if ( \file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once __DIR__ . '/vendor/autoload.php';
}

$sample = new Sample();
$sample->init();
