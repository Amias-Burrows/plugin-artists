wp.blocks.registerBlockType('artists-masonry/custom-block', {	// The actual Gutenberg block
	title: 'Artists Attic Masonry Grid',
	icon: 'grid-view',
	category: 'design',
	attributes: {	// Used as the props in the React code in edit:
		/*
		title: { type: 'array' },
		description: { type: 'array' },
		image: { type: 'array' },
		perma: { type: 'array' },
		amount: { type: 'int' }
		*/
	},
	edit: function(props) {	// What shows up in the editor
		/*
		function updateTitle(i, event) {
			props.setAttributes{title[i]: event.target.value }
		}

		return {
			/__PURE__/React.createElement('div', null, /__PURE__/
				for ( let i = 0; i > props.attributes.amount; i++ ) {
					React.createElement('label', { /__PURE__/
						for: 'title'
					}, 'Title'),
					React.createElement('input', { /__PURE__/
						name: 'title',
						type: 'text',
						value: props.attributes.title[i],
						onChange: (e) => updateTitle(i)
					}
				}
			);
		};
		*/
	return React.createElement('p', null, 'This is now working');
	},
	save: function(props) {	//What shows up on the frontend
		return react.createElement('p', null, 'Hola Mundo (From the Frontend)');
	}
});
