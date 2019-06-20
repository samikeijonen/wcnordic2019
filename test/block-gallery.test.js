/*global describe, beforeAll, page, it, expect */

const { WP_BASE_URL } = require( './support/config' );

describe( 'Post: Gallery Block', () => {
	beforeAll( async () => {
		await page.goto( `${ WP_BASE_URL }/?name=block-gallery` );
	} );

	it( 'Should pass Axe tests', async () => {
		await expect( page ).toPassAxeTests();
	} );
} );
