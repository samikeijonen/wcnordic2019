<?php
/**
 * Default comment template.
 *
 * @package   WCNordic2019
 */

?>
<li <?php Hybrid\Attr\display( 'comment' ); ?>>

	<header class="comment__meta flex items-center font-size-m">
		<?= get_avatar( $data->comment, 120, '', '', [ 'class' => 'comment__avatar' ] ) ?>

		<div class="comment__info">
			<?php
			Hybrid\Comment\display_author(
				[
					'class' => 'comment__author fw-700',
					'after' => '<br />',
				]
			);

			Hybrid\Comment\display_permalink(
				[
					'text' => sprintf(
						// Translators: 1 is the comment date and 2 is the time.
						esc_html__( '%1$s at %2$s', 'wc-nordic-2019' ),
						Hybrid\Comment\display_date(),
						Hybrid\Comment\display_time()
					),
				]
			);

			Hybrid\Comment\display_edit_link( [ 'before' => WCNordic2019\sep() ] );
			Hybrid\Comment\display_reply_link( [ 'before' => WCNordic2019\sep() ] );
			?>
		</div>
	</header>

	<div class="comment__content">
		<?php if ( ! Hybrid\Comment\is_approved() ) : ?>
			<p class="comment__moderation">
				<?php esc_html_e( 'Your comment is awaiting moderation.', 'wc-nordic-2019' ); ?>
			</p>
		<?php endif; ?>

		<?php comment_text(); ?>
	</div>

<?php /* No closing </li> is needed.  WordPress will know where to add it. */ ?>
