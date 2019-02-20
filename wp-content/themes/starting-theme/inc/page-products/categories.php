<div class="container-fluid products">

	<div class="row title">
		<div class="col-md-6">
			<h2><?php echo post_type_archive_title( '', false ); ?></h2>
		</div>
		<div class="col-md-6">
			<?php echo term_description(); ?>
		</div>
	</div>

	<div class="row intro">
		<div class="col-md-6">
			<h3>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</h3>
		</div>
		<div class="col-md-6">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut ero labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco poriti laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in uienply voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat norin proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>

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
