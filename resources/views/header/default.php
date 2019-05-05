<?php
/**
 * The header for our theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package   WCNordic2019
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<?php wp_head(); ?>
</head>

<body <?php Hybrid\Attr\display( 'body' ); ?>>

<div class="app mx-auto max-width-full">
	<header class="app-header mx-auto max-width-xl py-4">
		<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'wc-nordic-2019' ); ?></a>

		<div class="app-header__branding px-2">
		<?php
			WCNordic2019\site_title();
			WCNordic2019\site_description();
		?>
		</div>

		<?php Hybrid\View\display( 'nav/menu', 'primary', [ 'name' => 'primary' ] ); ?>
	</header>
