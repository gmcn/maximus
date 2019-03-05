<div class="container-fluid partners">

  <div class="row parent">
		<div class="col-md-6">
      <?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'partners_country' ) );  ?>
			<h1>Where to Buy</h1>
		</div>
		<div class="col-md-6 breadcrumbs">
			<?php
				if ( function_exists('yoast_breadcrumb') ) {
				  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
				}
				?>
		</div>
	</div>
