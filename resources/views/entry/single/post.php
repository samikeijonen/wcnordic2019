<?php
/**
 * Post content template.
 *
 * @package   WCNordic2019
 */

?>
<article <?php Hybrid\Attr\display( 'entry' ); ?>>
	<header class="entry__header">
		<h1 class="entry__title"><?php single_post_title(); ?></h1>

		<?php Hybrid\View\display( 'partials', 'entry-byline' ); ?>
	</header>

	<div class="entry__content">
		<?php
		the_content();
		Hybrid\View\display( 'nav/pagination', 'post' );
		?>
	</div>

	<footer class="entry__footer">
		<?php
		Hybrid\Post\display_terms(
			[
				'taxonomy' => 'category',
				'before'   => '<span class="terms-wrapper"><span class="screen-reader-text">' . esc_html__( 'Categories:', 'wc-nordic-2019' ) . ' </span>' . WCNordic2019\get_svg( [ 'icon' => 'folder-open' ] ),
				'after'    => '</span>',
			]
		);

		Hybrid\Post\display_terms(
			[
				'taxonomy' => 'post_tag',
				'before'   => '<span class="terms-wrapper"><span class="screen-reader-text">' . esc_html__( 'Tags:', 'wc-nordic-2019' ) . ' </span>' . WCNordic2019\get_svg( [ 'icon' => 'hashtag' ] ),
				'after'    => '</span>',
			]
		);
		?>
	</footer>
</article>
