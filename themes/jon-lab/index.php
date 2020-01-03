<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
							// Se existir algum post
							if( have_posts() ):

								// carrega o loop de posts
								while( have_posts() ): the_post();
									get_template_part( 'template-parts/content' );
								endwhile;

								// navegação com numeros
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