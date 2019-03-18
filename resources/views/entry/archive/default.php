<?php
/**
 * Archive template.
 *
 * @package   WCNordic2019
 */

?>
<article <?php Hybrid\Attr\display( 'entry', 'archive' ); ?>>
	<header class="entry__header">
		<h2 class="entry__title"><a class="decoration-none h-decoration-underline color-dark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

		<?php Hybrid\View\display( 'partials', 'entry-byline' ); ?>
	</header>

	<div class="entry__summary font-size-1">
		<?php the_excerpt(); ?>
	</div>
</article>
