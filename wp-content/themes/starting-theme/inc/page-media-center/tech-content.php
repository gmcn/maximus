<?php

  $video = array(
  'post_type' => 'downloads',
  'tax_query' => array(
    array(
      'taxonomy' => 'downloads_type',
      'field' => 'slug',
      'terms'    => 'spec-sheet',
    ),
  ),
  );
  $videoquery = new WP_Query( $video );

 ?>

  <?php if ( $videoquery->have_posts() ) :  ?>
    <div class="container-fluid download">
      <div class="row">
        <div class="col-md-2 wow fadeInLeft">
          <h2>Technical Specs</h2>
        </div>
        <div class="col-md-10">
          <?php while ( $videoquery->have_posts() ) : $videoquery->the_post();

          $downloadFile = get_field('download_file');

          ?>
            <div class="col-sm-6 col-md-3 col-lg-2 wow fadeInRight download__single">
              <a href="<?php echo $downloadFile ?>" download>
                <img src="<?php echo get_template_directory_uri() ?>/images/pdf-file.svg" alt="Download <?php the_title(); ?>">
                <p><?php the_title(); ?></p>
              </a>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  <?php endif; wp_reset_postdata();?>
