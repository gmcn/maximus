<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

get_header(); ?>

	<?php
		include(locate_template("inc/page-partners/title.php"));
		include(locate_template("inc/page-partners/filter.php"));
		include(locate_template("inc/page-partners/list.php"));
		include(locate_template("inc/page-partners/map.php"));
	?>

<?php
get_footer();
