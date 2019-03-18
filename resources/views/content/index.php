<?php
/**
 * Content template.
 *
 * @package   WCNordic2019
 */

?>
<main id="main" class="app-main px-2 py-4 mx-auto max-width-s">
	<?php
	Hybrid\View\display( 'partials', 'archive-header' );

	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();

			Hybrid\View\display( 'entry/archive', Hybrid\Post\hierarchy() );
		endwhile;

		Hybrid\View\display( 'nav/pagination', 'posts' );
	endif;
	?>
</main>
