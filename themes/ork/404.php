<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Ork
 */

get_header();
?>
	<div class="content-area">
		<main>
			<div class="container">
				<header>
					<h1><?php esc_html_e( 'Página não encontrada', 'ork' ); ?></h1>
					<p><?php esc_html_e( 'Opa! Opa! Opa! Essa págna não existe', 'ork') ?></p>
				</header>
				<?php 
					the_widget( 'WP_Widget_Recent_Posts',
						array(
							'title'		=> esc_html__( 'Dê uma olhada nas nossas novidades enquanto isso', 'ork' ),
							'number'	=> 3
						)		
					 );
				 ?>
			</div>
		</main>
	</div>

<?php
get_footer();
