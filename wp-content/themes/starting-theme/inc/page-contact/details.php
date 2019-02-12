<?php

$address = get_field('address');
$phone_number = get_field('phone_number');
$fax_number = get_field('fax_number');
$email_address = get_field('email_address');

$contentLeftHeading = get_field('contact_content_left_column_heading');
$contentLeftContent = get_field('contact_content_left_column');
$contentRightHeading = get_field('contact_content_right_column_heading');
$contentRightContent = get_field('contact_content_right_column');

 ?>


<div class="container-fluid contact">

  <div class="row title">
    <div class="col-md-6">
      <h1><?php the_title(); ?></h1>
    </div>
    <div class="col-md-6 breadcrumbs">
      <?php
        if ( function_exists('yoast_breadcrumb') ) {
          yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
        }
        ?>
    </div>

  </div>

  <div class="row contact_details">
    <div class="col-md-12">
      <h2>Maximun Crushing & Screening</h2>
    </div>
    <div class="col-md-3">
      <span>Address</span>
      <?php echo $address ?>
    </div>
    <div class="col-md-3">
      <span>Phone</span>
      <a href="tel:<?php echo $phone_number ?>"><?php echo $phone_number ?></a>
      <span>Fax</span>
      <?php echo $fax_number ?>
      <span>Email:</span>
      <a href="mailto:<?php echo $email_address ?>"><?php echo $email_address ?></a>
    </div>
    <div class="col-md-3 find">
      <a href="https://www.google.com/maps/place/Maximus+Crushing+and+Screening/@54.5210782,-6.7615409,16z/data=!4m8!1m2!3m1!2sMaximus+Crushing+and+Screening!3m4!1s0x48608b16221d3c83:0x680f70a7a717184!8m2!3d54.5207779!4d-6.7600572" target="_blank"><img class="fb" src="<?php echo get_template_directory_uri() ?>/images/plot.svg" alt="Find Us on Google Maps"> CLICK TO FIND US ON GOOGLE MAPS</a>
      <a href="https://www.facebook.com/MaximusCandS/" target="_blank"><img class="fb" src="<?php echo get_template_directory_uri() ?>/images/facebook.svg" alt="Follow Us on Facebook"> CLICK TO FOLLOW US ON FACEBOOK</a>
    </div>
  </div>
