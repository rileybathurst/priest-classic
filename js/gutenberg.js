wp.domReady( function() {
	wp.blocks.registerBlockStyle( 'core/gallery', {
		name: 'default',
		label: 'Default',
		isDefault: true,
	} );

	wp.blocks.registerBlockStyle( 'core/gallery', {
		name: 'slider-gallery',
		label: 'Slider',
	} );

	wp.blocks.registerBlockStyle( 'core/media-text', {
		name: 'default',
		label: 'Default',
		isDefault: true,
	} );

	wp.blocks.registerBlockStyle( 'core/media-text', {
		name: 'featured-media-text',
		label: 'Featured',
	} );

	wp.blocks.registerBlockStyle( 'core/separator', {
		name: 'default',
		label: 'Default',
		isDefault: true,
	} );

	wp.blocks.registerBlockStyle( 'core/separator', {
		name: 'swiss-separator',
		label: 'Swiss',
	} );
} );