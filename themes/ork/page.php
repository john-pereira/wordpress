<?php
/**
 * The template for displaying all single posts
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
							<?php 
								// carrega o loop de posts
								while( have_posts() ): the_post();
									get_template_part( 'template-parts/content', 'page' );
								endwhile;
							?>
						</div>
					</div>
				</section>
			</main>
		</div>
<?php get_footer(); ?>