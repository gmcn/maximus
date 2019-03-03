<?php

$page_intro = get_field('page_intro');
$page_sub_intro = get_field('page_sub_intro');
$content = get_the_content();

 ?>

<?php if ($content): ?>

  <div class="container-fluid page">
    <div class="row">
      <div class="col-md-5 intro wow fadeInLeft">
        <h2><?php echo $page_intro ?></h2>
        <p><?php echo $page_sub_intro ?></p>
      </div>
      <div class="col-md-6 col-md-offset-1 content wow fadeInRight">
        <?php echo $content; ?>

      </div>
    </div>
  </div>

<?php endif; ?>
