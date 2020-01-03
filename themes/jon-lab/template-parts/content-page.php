<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Jon Lab
 */

?>
<article class="col">
	<h2><?php the_title(); ?></h2>
	<div><?php the_content(); ?></div>
	<?php 
		if( comments_open() || get_comments_number() ):
			comments_template();
		endif;
	?>	
</article>