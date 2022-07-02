wp.blocks.registerBlockType('artists-masonry/custom-block', {	// The actual Gutenberg block
	title: 'Artists Attic Masonry Grid',
	icon: 'grid-view',
	category: 'design',
	attributes: {	// Used as the props in the React code in edit:
		title: { type: 'string' },
		description: { type: 'string' },
		image: { type: 'string' },
		perma: { type: 'string' },
		amount: { type: 'int' }
	},
	edit: function(props) {	// What shows up in the editor
		return {
			React.createElement('p', null, 'The Content');
		};
	},
	save: function(props) {	//What shows up on the frontend
		return react.createElement('p', null, 'Hola Mundo (From the Frontend)');
	}
});
