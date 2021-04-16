<?php

namespace Jenko\Plugin\Example;

class Sample {
	public function init(): void {
		add_filter(
			'body_class',
			function( $classes ) {
				return array_merge( $classes, [ 'example-plugin-works' ] );
			}
		);
	}
}
