/**
 * Adds block class to list, paragraph, and heading blocks.
 *
 * @link https://wordpress.org/gutenberg/handbook/designers-developers/developers/filters/block-filters/#blocks-registerblocktype
 *
 * @param {type}   settings Settings for the block.
 * @param {string} name     Block name.
 *
 * @return {string} Classname.
 */
function addWideSupport( settings, name ) {
	if ( 'core/paragraph' !== name ) {
		return settings;
	}

	return lodash.assign( {}, settings, {
		supports: lodash.assign( {}, settings.supports, {
			align: [ 'wide' ],
		} ),
	} );
}

wp.hooks.addFilter(
	'blocks.registerBlockType',
	'wcnordic2019/wide-support',
	addWideSupport
);
