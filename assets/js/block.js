wp.blocks.registerBlockType("artists-masonry/grid-format", {
	title: 'Artists Attic Masonry Grid',
	icon: 'grid-view',
	category: 'design',
	edit: function(props) {
		return <p>Hello World (from the editor)</p>;
	},
	save: function(props) {
		return <p>Hola Mundo (from the frontend)</p>;
	},
});
