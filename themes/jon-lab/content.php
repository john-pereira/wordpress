<article <?php post_class(); ?>>
	<h2>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</h2>
	<div class="post-thumbnail">
		<?php 
		if( has_post_thumbnail() ):
			the_post_thumbnail( 'fancy-lab-blog', array( 'class' => 'img-fluid' ) );
		endif;
		 ?>
	</div>
	<div class="meta">
		<p>Publicado por <?php the_author_posts_link(); ?> em <?php echo get_the_date(); ?>
		<br /> 
		<?php if( has_category() ): ?>
			Categorias: <span><?php the_category( ' ' ); ?></span>
		<?php endif; ?>
		<br />
		<?php if( has_tag() ): ?>
			Tags: <span><?php the_tags( '', ', ' ); ?></span>
		<?php endif; ?>
		</p>
	</div>
	<div><?php the_excerpt(); ?></div>
</article>