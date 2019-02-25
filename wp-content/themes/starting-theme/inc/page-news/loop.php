<div class="container-fluid news">

  <div class="row news_posts">

      <?php
      $i = 0;
      /* Start the Loop */
      while ( have_posts() ) : the_post();
      $thumb_id = get_post_thumbnail_id();
      $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'large', false);
      $thumb_url = $thumb_url_array[0];
      ?>


        <div class="col-md-4 news_section__post">
  				<div class="news_posts__post__wrapper" style="background: url(<?php echo $thumb_url; ?>) #283C4F center center; background-size: cover;">
            <div class="date">
              <?php echo the_date('d.m.Y'); ?>
            </div>
          </div>
          <div class="news_posts__post__content matchheight">
            <h2><?php the_title(); ?></h2>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>">Read More</a>
          </div>
  			</div>
      <?php $i++; endwhile;  ?>

  </div>

</div><!-- /.container-fluid.blog -->
