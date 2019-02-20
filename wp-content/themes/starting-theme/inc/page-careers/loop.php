<div class="container-fluid careers">

  <?php
  if ( have_posts() ) : ?>

    <div class="row parent">
      <div class="col-md-6">
        <h2>Careers</h2>
      </div>
      <div class="col-md-6 breadcrumbs">
        <?php
          if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
          }
          ?>
      </div>
    </div>

    <?php
    /* Start the Loop */
    while ( have_posts() ) : the_post();

    $jobBase = get_field('job_base');
    $jobContract = get_field('job_contract');
    $payBand = get_field('pay_band');
    $closingDate = get_field('closing_date');
    $applicationForm = get_field('application_form');
    $monitoringForm = get_field('monitoring_form');


    ?>

    <div class="row career">

      <div class="col-md-6 career__title wow fadeInLeft">
        <div class="label">
          Job Title:
        </div>
        <h2><?php the_title(); ?></h2>
      </div>

      <div class="col-md-6 excerpt  wow fadeInRight">
        <p><?php echo the_excerpt(); ?></p>
      </div>

      <div class="clear">

      </div>

      <div class="col-md-12 wow fadeInUp">


        <div class="row career__details">
          <div class="col-md-3">
            <div class="label">
              Based at:
            </div>
            <?php echo $jobBase ?>
          </div>
          <div class="col-md-3">
            <div class="label">
              Contract:
            </div>
            <?php echo $jobContract ?><br  />
            <div class="label">
              Pay Band:
            </div>
            <?php echo $payBand ?>
          </div>
          <div class="col-md-3">
            <div class="label">
              Date Ending:
            </div>
            <?php echo $closingDate ?>
          </div>
          <div class="col-md-3">
            <div class="buttons">
              <a href="<?php the_permalink(); ?>">View Details</a>
            </div>
          </div>
        </div>

      </div>

    </div>

    <?php endwhile;

    the_posts_navigation();

  else :

    get_template_part( 'template-parts/content', 'none' );

  endif; ?>

</div><!-- /.container-fluid careers -->
