<?php
/**
 * Posts pagination.
 *
 * @package   WCNordic2019
 */

Hybrid\Pagination\display(
	'posts',
	[
		'prev_text'          => WCNordic2019\get_svg( [ 'icon' => 'arrow-left' ] ) . '<span class="screen-reader-text">' . esc_html__( 'Previous page', 'wc-nordic-2019' ) . '</span>',
		'next_text'          => '<span class="screen-reader-text">' . esc_html__( 'Next page', 'wc-nordic-2019' ) . '</span>' . WCNordic2019\get_svg( [ 'icon' => 'arrow-right' ] ),
		'before_page_number' => '<span class="screen-reader-text">' . esc_html__( 'Page', 'wc-nordic-2019' ) . ' </span>',
		'title_text'         => esc_html__( 'Posts Navigation', 'wc-nordic-2019' ),
	]
);
