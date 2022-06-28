wp.blocks.registerBlockType('artists-masonry/custom-block', {
	title: 'Artists Attic Masonry Grid',
	icon: 'grid-view',
	category: 'design',
	edit: function(props) {
		return React.createElement('p', null, 'Hello World (From the Editor)');
	},
	save: function(props) {
		return react.createElement('p', null, 'Hola Mundo (From the Frontend)');
	},
});
