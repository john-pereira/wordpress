<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Jon Lab
 */

get_header();
?>
		<div class="content-area">
			<main>
				<div class="container">
					<div class="row">

						<h1>Resultado de pesquisa por: <?php echo get_search_query(); ?></h1>

						<?php 

						get_search_form();
							// Se existir algum post
							if( have_posts() ):

								// carrega o loop de posts
								while( have_posts() ): the_post();
									get_template_part( 'template-parts/content', 'search' );
								endwhile;
								the_posts_pagination( array(
									'prev_text'			=> 'Anterior',
									'next_text'			=> 'Próximo',
								));
							else:
						?>
							<p>Nada encontrado para esses critérios de busca.</p>
						<?php endif; ?>
						
					</div>
				</div>
			</main>
		</div>
<?php get_footer(); ?>