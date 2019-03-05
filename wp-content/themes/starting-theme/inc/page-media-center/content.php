<?php

  $video = array(
  'post_type' => 'downloads',
  'tax_query' => array(
    array(
      'taxonomy' => 'downloads_type',
      'field' => 'slug',
      'terms'    => 'video',
    ),
  ),
  );
  $videoquery = new WP_Query( $video );

 ?>

  <?php if ( $videoquery->have_posts() ) :  ?>
    <div class="container-fluid download">
      <div class="row">
        <div class="col-md-2 wow fadeInLeft">
          <h2>Video</h2>
        </div>
        <div class="col-md-10 wow fadeInRight">
          <?php while ( $videoquery->have_posts() ) : $videoquery->the_post();

          $downloadFile = get_field('download_file');
          $downloadPreview = get_field('download_file_preview');

           ?>
           <div class="col-sm-6 col-md-3 col-lg-2 wow fadeInRight download__single">
             <a href="<?php echo $downloadFile ?>" download>
               <?php if ($downloadPreview): ?>
                 <img src="<?php echo $downloadPreview ?>" alt="Download <?php the_title(); ?>">
               <?php else : ?>
                 <img src="<?php echo get_template_directory_uri() ?>/images/video-player.svg" alt="Download <?php the_title(); ?>">
               <?php endif; ?>
              <p><?php the_title(); ?></p>
            </a>
          </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  <?php endif; wp_reset_postdata();?>

  <?php

    $pdf = array(
    'post_type' => 'downloads',
    'tax_query' => array(
      array(
        'taxonomy' => 'downloads_type',
        'field' => 'slug',
        'terms'    => 'pdf',
      ),
    ),
    );
    $pdfquery = new WP_Query( $pdf );

   ?>

    <?php if ( $pdfquery->have_posts() ) :  ?>
      <div class="container-fluid download">
        <div class="row">
          <div class="col-md-2 wow fadeInLeft">
            <h2>PDF</h2>
          </div>
          <div class="col-md-10 wow fadeInRight">
            <?php while ( $pdfquery->have_posts() ) : $pdfquery->the_post();

            $downloadFile = get_field('download_file');
            $downloadPreview = get_field('download_file_preview');

             ?>
             <div class="col-sm-6 col-md-3 col-lg-2 wow fadeInRight download__single">
               <a href="<?php echo $downloadFile ?>" download>
                 <?php if ($downloadPreview): ?>
                   <img src="<?php echo $downloadPreview ?>" alt="Download <?php the_title(); ?>">
                 <?php else : ?>
                   <img src="<?php echo get_template_directory_uri() ?>/images/pdf-file.svg" alt="Download <?php the_title(); ?>">
                 <?php endif; ?>
                <p><?php the_title(); ?></p>
              </a>
            </div>
            <?php endwhile; ?>
          </div>
        </div>
      </div>
    <?php endif; wp_reset_postdata();?>

    <?php

      $image = array(
      'post_type' => 'downloads',
      'tax_query' => array(
        array(
          'taxonomy' => 'downloads_type',
          'field' => 'slug',
          'terms'    => 'image',
        ),
      ),
      );
      $imagequery = new WP_Query( $image );

     ?>

      <?php if ( $imagequery->have_posts() ) :  ?>
        <div class="container-fluid download">
          <div class="row">
            <div class="col-md-2 wow fadeInLeft">
              <h2>Image</h2>
            </div>
            <div class="col-md-10 wow fadeInRight">
              <?php while ( $imagequery->have_posts() ) : $imagequery->the_post();

              $downloadFile = get_field('download_file');
              $downloadPreview = get_field('download_file_preview');

               ?>
               <div class="col-sm-6 col-md-3 col-lg-2 wow fadeInRight download__single">
                 <a href="<?php echo $downloadFile ?>" download>
                   <?php if ($downloadPreview): ?>
                     <img src="<?php echo $downloadPreview ?>" alt="Download <?php the_title(); ?>">
                   <?php else : ?>
                     <img src="<?php echo get_template_directory_uri() ?>/images/media-centre.svg" alt="Download <?php the_title(); ?>">
                  <?php endif; ?>
                  <p><?php the_title(); ?></p>
                </a>
              </div>
              <?php endwhile; ?>
            </div>
          </div>
        </div>
      <?php endif; wp_reset_postdata();?>
