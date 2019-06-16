<?php
/**
 * Entry byline.
 *
 * @package   WCNordic2019
 */

?>

<div class="entry__byline pb-2">
	<?php Hybrid\Post\display_author(); ?>
	<?php Hybrid\Post\display_date( [ 'before' => WCNordic2019\sep() ] ); ?>
	<?php Hybrid\Post\display_comments_link( [ 'before' => WCNordic2019\sep() ] ); ?>
</div>
