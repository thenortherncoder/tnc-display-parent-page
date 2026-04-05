<?php
/**
 * render.php
 */

$parent_id = wp_get_post_parent_id( get_the_ID() );

if ( $parent_id ) :
	?>
	<p <?php echo get_block_wrapper_attributes(); ?>><?php echo esc_html( get_the_title( $parent_id ) ); ?></p>
	<?php
endif;
