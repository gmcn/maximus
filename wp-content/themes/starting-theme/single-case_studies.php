<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Starting_Theme
 */

get_header(); ?>

<?php
include(locate_template("inc/page-case-studies/content.php"));
?>

<?php
get_footer();
