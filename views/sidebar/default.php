<?php
/**
 * The sidebar containing widget areas.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package   WCNordic2019
 */

if ( ! is_active_sidebar( $data->name ) ) :
	return;
endif
?>

<aside class="sidebar sidebar--<?= esc_attr( $data->name ); ?> px-2 py-8 has-grey-700-background-color has-white-color">
	<div class="grid mx-auto max-w-xl">
		<?php dynamic_sidebar( esc_attr( $data->name ) ); ?>
	</div>
</aside>
