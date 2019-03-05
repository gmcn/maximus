<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starting_Theme
 */

?>

</div> <!-- #content -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<footer>
		<div class="footer">
			<?php wp_nav_menu( array(
				'theme_location' => 'menu-1',
			) );
				?>
			<div class="vert-align">
				<span>Maximus...crushing it</span>
			</div>

		</div>
		<div class="signature">
			© <?php echo date('Y'); ?> Maximus Crushing & Screening. All rights reserved. | <a href="/data-policy">Data Policy</a> | <a href="https://www.facebook.com/MaximusCandS/" target="_blank"><img class="fb" src="<?php echo get_template_directory_uri() ?>/images/facebook.svg" alt="Follow Us on Facebook"></a>
			<a href="https://digital-only.com" target="_blank"><img class="do" src="<?php echo get_template_directory_uri() ?>/images/digital-only.svg" alt="Designed and developed by Digital Only"></a>
		</div>
	</footer><!-- /footer -->
 </div> <!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
