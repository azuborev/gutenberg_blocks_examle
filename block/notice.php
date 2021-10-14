<?php
/**
 * Notice Template
 */
$notice_type        = get_field( 'notice_type' );
$notice_title       = get_field( 'notice_title' );
$notice_description = get_field( 'notice_description' );

?>
<div class="wp-block-o4t-notice-block notice-box <?php echo esc_html( 'notice-' . $notice_type ); ?>">
	<?php if ( $notice_title ) : ?>
		<h4><?php echo esc_html( $notice_title ); ?></h4>
	<?php endif; ?>
	<?php if ( $notice_description ) : ?>
	<p><?php echo esc_html( $notice_description ); ?></p>
	<?php endif; ?>
</div>