<div class="container-fluid product-single">

  <div class="row parent">
		<div class="col-md-6">
			<h2>PRODUCTS</h2>
		</div>
		<div class="col-md-6 breadcrumbs">
			<?php
				if ( function_exists('yoast_breadcrumb') ) {
				  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
				}
				?>
		</div>
	</div>

<div class="row">

  <?php
  if ( have_posts() ) : /* Start the Loop */
  while ( have_posts() ) : the_post();

  $length_transport = get_field('length_transport');
  $width_transport = get_field('width_transport');
  $height_transport = get_field('height_transport');
  $weight_tracked = get_field('weight_tracked');
  $screen_dimensions_top_deck = get_field('screen_dimensions_top_deck');
  $screen_dimensions_bottom_deck = get_field('screen_dimensions_bottom_deck');
  $engine = get_field('engine');
  $engine_power = get_field('engine_power');
  $option = get_field('option');
  $brochure_download = get_field('brochure_download');
  $video = get_field('video');

   ?>

    <div class="col-md-6 content wow fadeInLeft">
      <h1><?php the_title(); ?></h1>
      <?php the_content() ?>

      <?php if( have_rows('detailed_information') ): ?>

        <div class="details">

        <?php while( have_rows('detailed_information') ): the_row();

          // vars
          $detailHeading = get_sub_field('detail_heading');
          $detailContent = get_sub_field('detail_content');

          ?>

          <p><strong><?php echo $detailHeading ?>:</strong> <?php echo $detailContent; ?> </p>

        <?php endwhile; ?>

      </div>

      <?php endif; ?>

      <?php if ($brochure_download): ?>
        <a class="back" href="<?php echo $brochure_download; ?>" target="_blank" download>Download PDF</a>
      <?php endif; ?>


    </div>
    <div class="col-md-6 thumbimg wow fadeInRight">
      <div class="gallery">
        <?php if( have_rows('image_gallery') ): ?>

          <a class="fancybox" rel="group" href="<?php the_post_thumbnail_url(); ?>" title="<?php the_title(); ?>">

              <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />

          </a>

          <img class="more" src="<?php echo get_template_directory_uri() ?>/images/photo-camera.svg" alt="View <?php the_title() ?> Gallery">

        </div>

        <div class="gallery">

          <p>Click on the icon above to enlarge and view all images.</p>

        </div>

        <?php else : ?>
          <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
        <?php endif; ?>

      <?php if ($video): ?>
        <div class="video">
          <hr>
          <p><?php the_title(); ?> In Action</p>
          <iframe width="100%" height="500" src="https://www.youtube.com/embed/<?php echo $video; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
        </div>
      <?php endif; ?>

    </div>

    <div class="col-md-12 bottom">
      <hr>
      <a class="back" href="<?php echo site_url(); ?>/products">Back to Products</a>
    </div>


      <?php if( have_rows('image_gallery') ): ?>
      <!-- Hidden Gallery -->
      <div class="hidden">
        <?php while( have_rows('image_gallery') ): the_row();
          // vars
          $image = get_sub_field('gallery_image');
          $image_title = get_sub_field('image_title');
          $image_url = $image['sizes']['thumbnail'];
          ?>

            <a class="fancybox" rel="group" href="<?php echo $image ?>" title="<?php if($image_title) : ?>
              <?php echo $image_title ?>
            <?php else : ?>
              <?php the_title(); ?>
            <?php endif; ?>">

                <img src="<?php echo $image_url; ?>" alt="<?php if($image_title) : ?>
                  <?php echo $image_title ?>
                <?php else : ?>
                  <?php the_title(); ?>
                <?php endif; ?>" />
            </a>

        <?php endwhile; wp_reset_postdata(); ?>
      </div>
    <?php endif; ?>
  <?php endwhile; ?>
  <?php endif; ?>
</div>

</div>
