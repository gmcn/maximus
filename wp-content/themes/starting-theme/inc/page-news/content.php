<div class="container-fluid news-single">
  <div class="row">

    <?php
    if ( have_posts() ) : /* Start the Loop */
    while ( have_posts() ) : the_post(); ?>

      <div class="col-md-6 content wow fadeInLeft">
        <div class="date">
          <?php the_date('d.m.y'); ?>
        </div>
        <h1><?php the_title(); ?></h1>
        <?php the_content() ?>
        <a class="back" href="/news">Back to news</a>
      </div>
      <div class="col-md-6 thumbimg wow fadeInRight">
        <?php if( have_rows('gallery') ): ?>

          <a class="fancybox" rel="group" href="<?php the_post_thumbnail_url(); ?>" title="<?php the_title(); ?>">

              <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />

          </a>


          <img class="more" src="<?php echo get_template_directory_uri() ?>/images/photo-camera.svg" alt="View <?php the_title() ?> Gallery">
          <div class="col-md-12 galleryinfo">
            <p>Click on the icon above to enlarge and view all images.</p>

          </div>
        <?php else : ?>
          <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
        <?php endif; ?>
      </div>
        <?php if( have_rows('gallery') ): ?>
        <!-- Hidden Gallery -->
        <div class="hidden">
          <?php while( have_rows('gallery') ): the_row();
            // vars
            $image = get_sub_field('image');
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

  <div class="row prev-next">
    <div class="col-xs-6 previous">

      <?php
      $prev_post = get_previous_post();
      if (!empty( $prev_post )): ?>
        <?php previous_post_link('%link', '< Previous Article', TRUE); ?>
      <?php endif; ?>

    </div>
    <div class="col-xs-6 next">
      <?php
      $next_post = get_next_post();
      if (!empty( $next_post )): ?>
        <?php next_post_link('%link', 'Next Article >', TRUE); ?>
      <?php endif; ?>
    </div>
  </div>

</div>
