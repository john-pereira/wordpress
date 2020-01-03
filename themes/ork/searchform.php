<?php
/**
 * Template for displaying search forms in Ork
 *
 * @package Ork
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Pesquisar &hellip;', 'placeholder', 'ork' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit" class="search-submit"><span class="screen-reader-text"><?php echo _x( 'Pesquisar', 'submit button', 'ork' ); ?></span></button>
	<?php 
	 // If WooCommerce is activated, we'll be searching among products, not posts
	 if(class_exists('WooCommerce' )): ?>
		<input type="hidden" value="product" name="post_type" id="post_type">
	<?php endif; ?>
</form>