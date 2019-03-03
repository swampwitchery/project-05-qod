<?php
/**
 * The template for displaying the footer.
 *
 * @package QOD_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?> <p>Brought to you by <a href="https://redacademy.com/">&nbsp; RED Academy</a></p>
					</nav><!-- #site-navigation -->
				</div><!-- .site-info -->	
			</footer><!-- #colophon -->
		</div><!-- #page -->
	</div>
		<?php wp_footer(); ?>

	</body>
</html>
