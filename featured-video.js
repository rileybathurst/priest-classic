( function( wp ) {
	var el = wp.element.createElement;
	var registerBlockType = wp.blocks.registerBlockType;
	var TextControl = wp.components.TextControl;
 
	// https://developer.wordpress.org/block-editor/developers/block-api/block-registration/
	registerBlockType( 'kulta/featured-video-block', {
		title: 'Featured Video',
		icon: 'video-alt2',
		category: 'common',
 
		attributes: {
			blockValue: {
				type: 'string',
				source: 'meta',
				meta: 'featured_video_meta_block'
			}
		},
 
		edit: function( props ) {
			var className = props.className;
			var setAttributes = props.setAttributes;
 
			function updateBlockValue( blockValue ) {
				setAttributes({ blockValue });
			}
 
			return el(
				'div',
				{ className: className },
				el( TextControl, {
					label: 'Featured Video Meta Block',
					value: props.attributes.blockValue,
					onChange: updateBlockValue
				} )
			);
		},
 
		// No information saved to the block
		// Data is saved to post meta via attributes
		save: function() {
			return null;
		}
	} );
} )( window.wp );