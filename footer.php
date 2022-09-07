<?php

/**
 * Footer
 *
 * Page footer template
 *
 * @package    WordPress
 * @subpackage OrcaSites 2021 Theme
 * @author     Susie Butler <susie@orcasites.com>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://OrcaSites.com
 * @since      1.0.0
 */

?>

<footer id="main-footer" class="row">
	<div id="footer-contact" class="col-md-12">
		<div class="row">
			<div class="col-md-4"><i class="fa fa-map-marker-alt" aria-hidden="true"></i> <a href="https://g.page/OrcaSites" target="_blank">Everett, Washington</a></div>
			<div class="col-md-4"><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:info@orcasites.com" target="_top">info@orcasites.com</a></div>
			<div class="col-md-4"><i class="fa fa-mobile-alt" aria-hidden="true"></i> <a href="tel:425-615-6722">(425)-615-6722</a></div>
		</div>
	</div>
	<div id="footer-copyright" class="col-md-12">&#169; <?php echo esc_html( gmdate( 'Y' ) ); ?> <a href="https://orcasites.com/" target="_blank">Orca Web Services, LLC</a></div>
</footer>

</div><!-- Closes the wrapper -->

<?php wp_footer(); ?>

</body>

</html>
