<?php

  $heroBackgroundImage = get_field('hero_background_image');
  $mainHeading = get_field('main_heading');
  $subHeading = get_field('sub_heading');
  $video = get_field('video');

 ?>

<div class="container-fluid hero" style="background: url(<?php echo $heroBackgroundImage ?>) center center; background-size: cover">

  <div class="hero__wrapper">
    <div class="vert-align">
      <div class="cta">
        <p class="heading"><?php echo $mainHeading; ?></p class="heading">
        <p><?php echo $subHeading; ?></p>

        <a class="various fancybox" data-fancybox-type="iframe" href="http://www.youtube.com/embed/<?php echo $video; ?>?autoplay=1"><img src="<?php echo get_template_directory_uri() ?>/images/play-button.svg" alt="<?php echo $mainHeading; ?> <?php echo $subHeading; ?>"></a>


        <!-- <a href="https://www.youtube.com/watch?v=<?php echo $video; ?>"><img src="<?php echo get_template_directory_uri() ?>/images/play-button.svg" alt="<?php echo $mainHeading; ?> <?php echo $subHeading; ?>"></a> -->
      </div>
    </div>
  </div>

</div>
