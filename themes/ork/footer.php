<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ork
 */

?>
		<footer>
			<section class="footer-widgets">
				<div class="container">
					<div class="row">
						<?php if( is_active_sidebar( 'ork-sidebar-footer1' ) ): ?>
							<div class="col-md-4 col-12">
								<?php dynamic_sidebar( 'ork-sidebar-footer1' ) ?>
							</div>
						<?php endif; ?>
						<?php if( is_active_sidebar( 'ork-sidebar-footer2' ) ): ?>
							<div class="col-md-4 col-12">
								<?php dynamic_sidebar( 'ork-sidebar-footer2' ) ?>
							</div>		
						<?php endif; ?>
						<?php if( is_active_sidebar( 'ork-sidebar-footer3' ) ): ?>
							<div class="col-md-4 col-12">
								<?php dynamic_sidebar( 'ork-sidebar-footer3' ) ?>
							</div>	
						<?php endif; ?>
					</div>
				</div>
			</section>
			<section class="copyright">
				<div class="container">
					<div class="row">
						<div class="copyright-text col-12 col-md-6">	
							<p><?php echo esc_html ( get_theme_mod( 'set_copyright', __('Copyright X - Todos Direitos Reservados', 'ork' ) ) ); ?></p>
						</div>
						<nav class="footer-menu  col-12 col-md-6 text-left text-md-right">
							<?php wp_nav_menu(
									array(
										'theme_location' => 'ork_footer_menu',
										'depth'			 => 1,
									)						
								); 
							?>
						</nav>	
					</div>

				</div>			
				
			</section>
		</footer>
	</div>
	<?php wp_footer(); ?>
</body>
</html>