<?php
/**
 * The template for the sidebar containing the shop  widget area
 *
 * @package Jon Lab
 */
?>

<?php if( is_active_sidebar( 'jon-lab-sidebar-shop' ) ): ?> 
		<?php dynamic_sidebar( 'jon-lab-sidebar-shop' ); ?>
<?php endif;