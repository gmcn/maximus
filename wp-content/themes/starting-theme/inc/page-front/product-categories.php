<div class="container-fluid fp_products">

	<?php

	// $terms = get_terms( 'products_category' );
	$terms = get_terms( array(
	  'taxonomy' => 'products_category',
	  // 'hide_empty' => false,
	) );
	if ( $terms ) : ?>
	<div class="row">
	  <?php foreach ( $terms as $term ) :
			$category_image = get_field( 'category_image', $term );
		?>
			<div class="col-md-4 product_cat">
				<a href="<?php echo get_term_link($term->slug, 'products_category') ?>">
					<div class="wrapper" style="background-image: url(<?php echo $category_image; ?>); background-size: cover;">
						<div class="innerlay">
							<!-- <div class="vert-align"> -->
								<h2><?php echo $term->name ?></h2>
								<p>
									Click HERE to find out more
								</p>
							<!-- </div> -->
						</div>
					</div>
				</a>
			</div>
		<?php endforeach; ?>
	</div>
	<?php endif; ?>

</div>
