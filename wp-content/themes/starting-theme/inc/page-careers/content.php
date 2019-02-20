<?php

$jobBase = get_field('job_base');
$jobContract = get_field('job_contract');
$payBand = get_field('pay_band');
$closingDate = get_field('closing_date');
$applicationForm = get_field('application_form');
$monitoringForm = get_field('monitoring_form');

 ?>

<div class="container-fluid career-single">

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


  <div class="row career">

    <div class="col-md-12 career__title careermatch  wow fadeIn">
      <div class="label">
        Job title:
      </div>
      <h2><?php the_title(); ?></h2>

      <div class="row career__details">
        <div class="col-md-4">
          <div class="label">
            Based at:
          </div>
          <?php echo $jobBase ?>
        </div>
        <div class="col-md-4">
          <div class="label">
            Contract:
          </div>
          <?php echo $jobContract ?><br  />
          <div class="label">
            Pay Band:
          </div>
          <?php echo $payBand ?>
        </div>
        <div class="col-md-4">
          <div class="label">
            Date Ending:
          </div>
          <?php echo $closingDate ?>
        </div>
      </div>

    </div>

    <div class="col-md-9 copy matchheight">
      <?php the_content(); ?>
    </div>
    <div class="col-md-3 forms matchheight">
      <?php if ($applicationForm): ?>
        <a href="<?php $applicationForm ?>" target="_blank">Download Application PDF</a>
      <?php endif; ?>
      <?php if ($monitoringForm): ?>
        <a href="<?php $monitoringForm ?>" target="_blank">Download Monitoring PDF</a>
      <?php endif; ?>
    </div>

  </div>

</div>
