<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package Jon Lab
 */
?>

<?php if( is_active_sidebar( 'jon-lab-sidebar-1' ) ): ?>
	<aside class="col-lg-3 col-md-4 col-12 h-100">
		<?php dynamic_sidebar( 'jon-lab-sidebar-1' ); ?>
	</aside> 
<?php endif;