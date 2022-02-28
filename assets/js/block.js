import { registerBlockType } from '@wordpress/blocks';

registerBlockType("artists-masonry/grid-format", {
	edit: function() {
		return <p>Hello World (from the editor)</p>;
	},
	save: function() {
		return <p>Hola Mundo (from the frontend)</p>;
	},
});
