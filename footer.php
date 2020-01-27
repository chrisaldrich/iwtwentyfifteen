<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	</div><!-- .site-content -->

	<script type="text/javascript" id="pt-script" src="/frag.js" async></script>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php
				/**
				 * Fires before the Twenty Fifteen footer text for footer customization.
				 *
				 * @since Twenty Fifteen 1.0
				 */
				do_action( 'twentyfifteen_credits' );
			?>
			<?php
			if ( function_exists( 'the_privacy_policy_link' ) ) {
				the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
			}
			?>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentyfifteen' ) ); ?>" class="imprint">
				<?php printf( __( 'Proudly powered by %s', 'twentyfifteen' ), 'WordPress' ); ?>
			</a><br />
			<a href="http://indieweb.org" rel="nofollow" alt="IndieWeb"><img src="/wp-content/themes/iwtwentyfifteen/img/indieweb-badge.png" alt="IndieWebCamp" width="80" height="15" style="image-rendering:pixelated;" /></a> 
			<a href="http://microformats.org/wiki/get-started"><img src="/wp-content/themes/iwtwentyfifteen/img/microformats-badge.png" width="80" height="15" alt="Microformats.org" style="image-rendering:pixelated;"></a> 
			<!-- Uncomment if this site accepts Webmentions
				<a title="This site accepts webmentions." href="https://www.w3.org/TR/webmention/"><img src="/wp-content/themes/iwtwentyfifteen/img/webmention-badge.png" width="80" height="15" alt="Webmention" style="image-rendering:pixelated;"></a>
			Webmention badge -->
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>