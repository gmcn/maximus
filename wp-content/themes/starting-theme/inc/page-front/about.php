<?php

  $aboutHeading = get_field('about_heading');
  $aboutContent = get_field('about_content');
  $aboutImg = get_field('about_img');

 ?>

  <div class="container-fluid about">
    <div class="row">
      <div class="col-md-6 about-img wow fadeInLeft matchheight">
        <div class="wrapper img" style="background: url(<?php echo $aboutImg ?>) center center no-repeat; background-size: cover;">

        </div>
      </div>
      <div class="col-md-6 content wow fadeInRight matchheight">
        <h2><?php echo $aboutHeading ?></h2>
        <p><?php echo $aboutContent ?></p>
        <img src="<?php echo get_template_directory_uri() ?>/images/maximus_sig.png" alt="Maximus 20+ Dealers Worldwide">
      </div>
    </div>
  </div>
