<?php
/**
 * The template for the sidebar containing the shop  widget area
 *
 * @package Ork
 */
?>

<?php if( is_active_sidebar( 'ork-sidebar-shop' ) ): ?>
		<?php dynamic_sidebar( 'ork-sidebar-shop' ); ?>
<?php endif;