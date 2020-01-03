<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Ork
 */

get_header();
?>
		<div class="content-area">
			<main>
				<div class="container">
					<div class="row">

						<h1><?php esc_html_e( 'Resultado de pesquisa por:', 'ork' ); ?> <?php echo get_search_query(); ?></h1>

						<?php 

						get_search_form();
							// Se existir algum post
							if( have_posts() ):

								// carrega o loop de posts
								while( have_posts() ): the_post();
									get_template_part( 'template-parts/content', 'search' );
								endwhile;
								the_posts_pagination( array(
									'prev_text'			=> esc_html__('Anterior', 'ork' ),
									'next_text'			=> esc_html__('Próximo', 'ork' ),
								));
							else:
						?>
							<p><?php esc_html_e( 'Nada encontrado para esses critérios de busca.', 'ork' ); ?></p>
						<?php endif; ?>
						
					</div>
				</div>
			</main>
		</div>
<?php get_footer(); ?>