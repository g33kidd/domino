<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Domino
 */

$footer_text = get_theme_mod('domino_footer_layout-text-content');
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
        <div class="container">
    		<div class="site-info">
                <?php echo $footer_text; ?>
    			<!-- <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'domino' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'domino' ), 'WordPress' ); ?></a>
    			<span class="sep"> | </span>
    			<?php printf( __( 'Theme: %1$s by %2$s.', 'domino' ), 'Domino', '<a href="http://themazing.com" rel="designer">Themazing Themes</a>' ); ?> -->
    		</div><!-- .site-info -->
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>