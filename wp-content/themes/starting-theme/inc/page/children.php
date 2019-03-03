



		<?php

		$args = array(
		    'post_type'      => 'page',
		    'posts_per_page' => -1,
		    'post_parent'    => $post->ID,
		    'order'          => 'ASC',
		    'orderby'        => 'menu_order'
		 );


		$parent = new WP_Query( $args );

		if ( $parent->have_posts() ) : ?>
			<div class="container-fluid post-about">
				<div class="row">
			    <?php $i = 1; while ( $parent->have_posts() ) : $parent->the_post(); ?>
						<div class="col-md-4 post-about__column wow fadeInUp">
							<div class="post-about__column__wrapper">
								<span>#0<?php echo $i; ?></span>
								<img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>">
								<h2><?php the_title(); ?></h2>
								<a href="<?php the_permalink(); ?>">Click HERE to find out more</a>
							</div>
						</div>
			    <?php $i++; endwhile; ?>
				</div>
			</div>

		<?php endif; wp_reset_postdata(); ?>
