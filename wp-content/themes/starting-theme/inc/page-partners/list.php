<div class="row partners__wrapper">
  <div class="col-md-6">
  <?php $i = 1; while ( have_posts() ) : the_post();

  $locationTitle = get_the_title();
  $locationAddress = get_field('location_address');
  $locationTown = get_field('location_town');
  $locationCounty = get_field('location_county');
  $locationPostcode = get_field('location_postcode');
  $locationTelephone = get_field('location_telephone');
  $locationFax = get_field('location_fax');
  $locationEmail = get_field('location_email');
  $locationWebsite = get_field('location_website');
  $location = get_field('location_position');

  ?>
    <div class="col-md-6 partner matchheight">

      <h2><?php echo $i ?>. <?php echo $locationTitle; ?></h2>

      <?php echo $locationAddress; ?>,<br />
      <?php if ($locationTown) : ?>
        <?php echo $locationTown ?>,<br />
      <?php endif; ?>
      <?php if ($locationCounty) : ?>
        <?php echo $locationCounty ?>,<br />
      <?php endif; ?>
      <?php if ($locationPostcode) : ?>
        <?php echo $locationPostcode ?>,<br />
      <?php endif; ?>
      <a class="maps" href="#map">View on maps</a>
      <?php if ($locationTelephone) : ?>
        <strong>Tel: </strong> <a href="tel:<?php echo $locationTelephone ?>"><?php echo $locationTelephone ?></a><br />
      <?php endif; ?>
      <?php if ($locationFax) : ?>
        <strong>Fax:</strong> <?php echo $locationFax ?><br />
      <?php endif; ?>
      <?php if ($locationEmail) : ?>
        <strong>Email:</strong> <a href="mailto:<?php echo $locationEmail ?>"><?php echo $locationEmail ?></a><br />
      <?php endif; ?>
      <?php if ($locationWebsite) : ?>
        <strong>Web:</strong> <a href="http://<?php echo $locationWebsite ?>" target="_blank"><?php echo $locationWebsite ?></a><br />
      <?php endif; ?>

      <img src="<?php echo get_template_directory_uri(); ?>/images/partner_sep.svg" alt="partner seperator">

    </div>
  <?php $i++; endwhile; ?>
</div>
