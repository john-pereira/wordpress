<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 *
 *
 * @package Ork
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
									'prev_text'			=> esc_html__('Anterior', 'ork' ),
									'next_text'			=> esc_html__('Próximo', 'ork' ),
								));
							else:
						?>
							<p><?php esc_html_e( 'Nada para mostrar.', 'ork' ) ?></p>
						<?php endif; ?>
						</div>
						<?php get_sidebar(); ?>
					</div>
				</div>
			</main>
		</div>
<?php get_footer(); ?>