<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 *
 *
 * @package Jon Lab
 */

get_header();
?>
		<div class="content-area">
			<main>
				<div class="container">
					<div class="row">
						<div class="col-lg-9 col-md-8 col-12">
						<?php 

							the_archive_title( '<h1 class="article-title"', '</h1>' );

							// Se existir algum post
							if( have_posts() ):

								// carrega o loop de posts
								while( have_posts() ): the_post();
									get_template_part( 'template-parts/content', 'archive' );
								endwhile;
								the_posts_pagination( array(
									'prev_text'			=> 'Anterior',
									'next_text'			=> 'Próximo',
								));
							else:
						?>
							<p>Nada para mostrar.</p>
						<?php endif; ?>
						</div>
						<?php get_sidebar(); ?>
					</div>
				</div>
			</main>
		</div>
<?php get_footer(); ?>