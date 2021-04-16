<?php

declare( strict_types=1 );

namespace Jenko\Plugin\Example\Tests;

use ReflectionClass;
use WP_UnitTestCase;

class ExampleTest extends WP_UnitTestCase {

	public function test_wordpress_and_plugin_are_loaded(): void {
		self::assertTrue( function_exists( 'do_action' ) );
	}

	public function test_wp_phpunit_is_loaded_via_composer(): void {
		self::assertStringStartsWith(
			dirname( __DIR__ ) . '/vendor/',
			getenv( 'WP_PHPUNIT__DIR' )
		);

		self::assertStringStartsWith(
			dirname( __DIR__ ) . '/vendor/',
			( new ReflectionClass( 'WP_UnitTestCase' ) )->getFileName()
		);
	}

	public function test_body_class_contains_example_class(): void {
		self::assertContains( 'example-plugin-works', get_body_class() );
	}
}
