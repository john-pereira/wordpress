<?php get_header( ); ?>

    <?php if(have_posts()) { ?>
        <?php while(have_posts()) { ?>
        	<?php the_post(); ?>
	        <h2>
	            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
	            	<?php the_title(); ?>
	            </a>
	        </h2>
	        <div>
	        	Publicado em
	        	<a href="<?php echo get_permalink() ?>">
	        		<time datetime="<?php echo get_the_date( 'c' ) ?>">
	        			<?php echo get_the_date( ); ?>
	        		</time>
	        	</a>
	        	Por <a href="<?php echo get_the_author() ?>">
					<?php echo get_the_author( ); ?>
	        	</a>
	        </div>
	        <div>
	        	<?php the_excerpt(); ?>  
	        </div>
	        <a href="<?php echo get_the_permalink() ?>" title="<?php the_title_attribute(); ?>">
	        	Leia Mais <span class="u-screen-reader-text">Sobre <?php the_title() ?></span>
	        </a>
        <?php } ?>
        <?php the_posts_pagination(); ?>
    <?php } else { ?>
        <p>Desculpe, nenhum post encontrado!</p>
    <?php } ?>            

<?php get_footer( ); ?>
 
