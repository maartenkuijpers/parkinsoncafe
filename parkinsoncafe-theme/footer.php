<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php get_sidebar( 'main' ); ?>

			<div class="site-info">
				<?php do_action( 'twentythirteen_credits' ); ?>
				<a target="_blank" href="<?php echo esc_url( __( 'http://www.parkinson-vereniging.nl/', 'twentythirteen' ) ); ?>" title="<?php esc_attr_e( 'ParkinsonNet', 'twentythirteen' ); ?>">Het Parkinson Café ’s-Hertogenbosch e.o. is gebaseerd op een concept van de Parkinson Vereniging</a>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>