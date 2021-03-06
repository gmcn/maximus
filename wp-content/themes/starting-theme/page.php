<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

get_header(); ?>

	<?php if (is_page(532)) : ?>
	<?php include(locate_template("inc/page/login.php")); ?>
	<?php endif; ?>
	<?php
		include(locate_template("inc/page-elements/title.php"));
		if (is_page('spare-parts')) : ?>
		<?php include(locate_template("inc/page/form.php")); ?>
		<?php endif; ?>
	<?php
		include(locate_template("inc/page/content.php"));
		include(locate_template("inc/page/children.php"));
	?>

<?php
//get_sidebar();
get_footer();
