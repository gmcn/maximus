<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

get_header(); ?>

<div class="container-fluid products">

	<div class="row title">
		<div class="col-md-6">
			<h2><?php echo post_type_archive_title( '', false ); ?></h2>
		</div>
		<div class="col-md-6">
			<?php echo term_description(); ?>
		</div>
	</div>



	<div class="row">
		<?php
		if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) : the_post();

			$model_number = get_field('model_number');
			$model_type = get_field('model_type');

			?>

			<div class="col-md-4 product">
				<div class="product__wrapper">
						<div class="col-md-4 model_number matchheight">

							<div class="vert-align">
								<?php echo $model_number ?>
							</div>

						</div>
						<div class="col-md-4 model_type matchheight">

							<div class="vert-align">
								<?php echo $model_type ?>
							</div>

						</div>
						<div class="col-md-4 model_link matchheight">
							<!-- <div class="vert-align"> -->
								<a href="<?php echo the_permalink(); ?>">View<br / >Product</a>
							<!-- </div> -->
						</div>
					<?php echo the_post_thumbnail(); ?>
				</div>
			</div>

			<?php endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
	</div>

</div>

<?php
get_footer();
