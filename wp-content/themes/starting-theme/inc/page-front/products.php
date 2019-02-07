<?php
	$args = array( 'post_type' => 'products', 'posts_per_page' => 6, 'orderby' => 'menu_order', 'order' => 'DESC' );
	$loop = new WP_Query( $args );
	if ($loop->have_posts()) : ?>
  <div class="container-fluid products">
  	<?php while ( $loop->have_posts() ) : $loop->the_post();

      $thumb_id = get_post_thumbnail_id();
      $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'large', false);
      $thumb_url = $thumb_url_array[0];

    ?>

  		<div class="col-md-4 product">
        <div class="product__wrapper" style="background: url(<?php echo $thumb_url; ?>) center center;">
          <div class="vert-align">
            <h2><?php echo the_title(); ?>
              <a href="<?php the_permalink() ?>">Find Out More</a>
            </h2>
          </div>
        </div>
  		</div>

  	<?php endwhile; wp_reset_query(); ?>
  </div>
<?php endif; ?>
