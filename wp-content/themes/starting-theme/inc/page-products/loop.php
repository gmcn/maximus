<div class="container-fluid products">

	<div class="row parent">
		<div class="col-md-6">
			<h1>PRODUCTS</h1>
		</div>
		<div class="col-md-6 breadcrumbs">
			<?php
				if ( function_exists('yoast_breadcrumb') ) {
				  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
				}
				?>
		</div>
	</div>

	<div class="row title">
		<div class="col-md-6">
			<h2>
				<?php echo single_term_title(); ?>
			</h2>
		</div>
		<div class="col-md-6 description">
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

			<div class="col-md-4 product wow fadeInUp">
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
						<a href="<?php echo the_permalink(); ?>">
							<div class="col-md-4 model_link matchheight">
								<!-- <div class="vert-align"> -->
									View<br / >Product</a>
								<!-- </div> -->
							</div>
						</a>
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
