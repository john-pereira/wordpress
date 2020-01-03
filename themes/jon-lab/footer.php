<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Jon Lab
 */

?>
		<footer>
			<section class="footer-widgets">
				<div class="container">
					<div class="row">
						<?php if( is_active_sidebar( 'jon-lab-sidebar-footer1' ) ): ?>
							<div class="col-md-4 col-12">
								<?php dynamic_sidebar( 'jon-lab-sidebar-footer1' ) ?>
							</div>
						<?php endif; ?>
						<?php if( is_active_sidebar( 'jon-lab-sidebar-footer2' ) ): ?>
							<div class="col-md-4 col-12">
								<?php dynamic_sidebar( 'jon-lab-sidebar-footer2' ) ?>
							</div>		
						<?php endif; ?>
						<?php if( is_active_sidebar( 'jon-lab-sidebar-footer3' ) ): ?>
							<div class="col-md-4 col-12">
								<?php dynamic_sidebar( 'jon-lab-sidebar-footer3' ) ?>
							</div>	
						<?php endif; ?>
					</div>
				</div>
			</section>
			<section class="copyright">
				<div class="container">
					<div class="row">
						<div class="copyright-text col-12 col-md-6">	
							<p><?php echo get_theme_mod( 'set_copyright', 'Copyright X - All Rights Reserved' ); ?></p>
						</div>
						<nav class="footer-menu  col-12 col-md-6 text-left text-md-right">
							<?php wp_nav_menu(
									array(
										'theme_location' => 'jon_lab_footer_menu'
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