<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Jon Lab
 */

get_header();
?>
	<div class="content-area">
		<main>
			<div class="container">
				<header>
					<h1>Página não encontrada</h1>
					<p>Opa! Opa! Opa! Essa págna não existe</p>
				</header>
				<?php 
					the_widget( 'WP_Widget_Recent_Posts',
						array(
							'title'		=> 'Dê uma olhada nas nossas novidades enquanto isso',
							'number'	=> 3
						)		
					 );
				 ?>
			</div>
		</main>
	</div>

<?php
get_footer();
