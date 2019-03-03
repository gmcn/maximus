<div class="container-fluid case-studies-single">

  <div class="row parent">
		<div class="col-md-6">
			<h2>Case Studies</h2>
		</div>
		<div class="col-md-6 breadcrumbs">
			<?php
				if ( function_exists('yoast_breadcrumb') ) {
				  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
				}
				?>
		</div>
	</div>

  <!-- <div class="row"> -->

    <?php
    if ( have_posts() ) : /* Start the Loop */
    while ( have_posts() ) : the_post();

    $csCountry = get_field('cs_country');

    $csDate = get_field('cs_date', false, false);
    $csDate = new DateTime($csDate);
    $csAreas = get_field('cs_areas');
    $csValue = get_field('cs_value');
    $csMachines = get_field('cs_machines_required');


    $csQuote = get_field('cs_quote');
    $quotedPerson = get_field('quoted_person');
    $quotedCompany = get_field('quoted_company');

     ?>

    <div class="row">

      <div class="col-md-6 title">
        <h1><?php the_title(); ?></h1>
        <?php echo $csCountry; ?>
      </div>

      <div class="col-md-6 back">
        <a href="<?php echo site_url(); ?>/case_studies">Back to Case Studies</a>
      </div>

    </div>

    <div class="row">

      <div class="col-md-6 content wow fadeInLeft">

        <div class="row details clear">
          <div class="col-md-4">
            <p class="details__title">Date</p>
            <span><?php echo $csDate->format('d.m.Y'); ?></span>
          </div>
          <div class="col-md-7 col-md-offset-1">
            <p class="details__title">Areas</p>
            <span><?php echo $csAreas; ?></span>
          </div>
          <div class="col-md-4">
            <p class="details__title">Value</p>
            <span><?php echo $csValue; ?></span>
          </div>
          <div class="col-md-7 col-md-offset-1">
            <p class="details__title">Machines Required</p>
            <span><?php echo $csMachines; ?></span>
          </div>
        </div>

        <?php the_content(); ?>


        <a class="back" href="<?php echo site_url(); ?>/case_studies">Back to Case Studies</a>

      </div>
      <div class="col-md-6 thumbimg wow fadeInRight">
        <div class="gallery">
          <?php if( have_rows('gallery') ): ?>

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

        <?php if ($csQuote): ?>
          <div class="quote">
            <p><?php echo $csQuote; ?></p>
            <?php echo $quotedPerson ?> | <?php echo $quotedCompany ?>
          </div>
        <?php endif; ?>

        <div class="enq_form clear">
          <div class="row">
            <div class="col-md-12">
              <h3>Interested...Get a quote today!</h3>
            </div>
          </div>
          <?php echo do_shortcode('[contact-form-7 id="512" title="Get a quote"]') ?>
        </div>

      </div>

    </div>


        <?php if( have_rows('gallery') ): ?>
        <!-- Hidden Gallery -->
        <div class="hidden">
          <?php while( have_rows('gallery') ): the_row();
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
  <!-- </div> -->

</div>
