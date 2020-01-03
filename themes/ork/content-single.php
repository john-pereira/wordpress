<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ork
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
    <header>
        <h1><?php the_title(); ?></h1>
        <div class="meta">
            <p><?php esc_html_e( 'Publicado por', 'ork' ); ?> <?php the_author_posts_link(); ?> <?php esc_html_e( 'em', 'ork' ); ?> <?php echo esc_html( get_the_date() ); ?>
            <br />
            <?php if( has_category() ): ?>
                <?php esc_html_e( 'Categorias', 'ork' ); ?>: <span><?php the_category( ' ' ); ?></span>
            <?php endif; ?>
            <br />
            <?php if( has_tag() ): ?>
                <?php esc_html_e( 'Tags', 'ork' ); ?>: <span><?php the_tags( '', ', ' ); ?></span>
            <?php endif; ?>
            </p>                           
        </div>        
        <div class="post-thumbnail">
            <?php 
            if( has_post_thumbnail() ): 
                the_post_thumbnail( 'ork-blog', array( 'class' => 'img-fluid') );
            endif;
            ?>
        </div>
    </header>    
    <div class="content">
    	<?php 
    	wp_link_pages(
    		array(
    			'before'	=> '<p class="inner-pagination">' . esc_html__( 'Páginas', 'ork' ),
    			'after'		=> '</p>',
    		)
    	);
    	?>
        <?php the_content(); ?>
    </div>
</article>