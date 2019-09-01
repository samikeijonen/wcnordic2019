<?php
/**
 * The footer for our theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package   WCNordic2019
 */

?>
	<footer class="app-footer px-2 py-8 has-grey-700-background-color has-white-color">
		<div class="mx-auto max-w-xl">
			<?php Hybrid\View\display( 'nav/menu', 'social', [ 'name' => 'social' ] ); ?>

			<p class="app-footer__credit text-center has-grey-100-color mb-0">
				<?php esc_html_e( 'Powered by crazy ideas and passion', 'wc-nordic-2019' ); ?>
				<span class="sep"> &middot; </span>
				<?php
					/* translators: %1$s is theme name, and %2$s is link to theme site. */
					printf( esc_html__( 'Theme %1$s by %2$s', 'wc-nordic-2019' ), 'WC Nordic 2019', '<a class="credit-link inherit-color inherit-hover-color" href="https://foxland.fi/">Foxland</a>' );
				?>
			</p>
		</div>
	</footer>

</div><!-- .app -->

<?php wp_footer(); ?>
</body>
</html>
