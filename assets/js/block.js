let block = function(title, description, image, perma) {	// Attempt at object function
	let title[] = title;
	let description[] = description;
	let image[] = image;
	let perma[] = perma;
	return null;
}
wp.blocks.registerBlockType('artists-masonry/custom-block', {	// The actual Gutenberg block
	title: 'Artists Attic Masonry Grid',
	icon: 'grid-view',
	category: 'design',
	attributes: {	// Used as the props in the React code in edit:
		object: { type: 'block' },
		other: { type: 'array' }
	}
// Need a Title and Description of page and an image to show with a link to the page as well
	},
	edit: function(props) {	// What shows up in the editor
		return {
			/*__PURE__*/React.createElement('div', null, {
				React.createElement('input', null)
			});
		};
	},
	save: function(props) {	//What shows up on the frontend
		return react.createElement('p', null, 'Hola Mundo (From the Frontend)');
	}
});
