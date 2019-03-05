<div class="filter">

  <div class="filter__wrapper">
    <p>Machine Type:</p>
    <div class="dropdown show">
      <a class="btn btn-secondary dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Machine type <img src="<?php echo get_template_directory_uri() ?>/images/filter_dropicon.svg" alt="Filter by year ">
      </a>

      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
         <?php
         $downloads_categories = get_terms('downloads_category', array('hide_empty' => false));
         foreach($downloads_categories as $downloads_category) { ?>
           <li> <a href="<?php echo get_term_link($downloads_category->slug, 'downloads_category') ?>"> <?php echo $downloads_category->name; ?></a></li>
         <?php } ?>
      </div>
    </div>
  </div>

  <div class="filter__wrapper">
    <p>Model:</p>
    <div class="dropdown show">
      <a class="btn btn-secondary dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Model <img src="<?php echo get_template_directory_uri() ?>/images/filter_dropicon.svg" alt="Filter by type">
      </a>

      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
         <?php
         $downloads_models = get_terms('downloads_model', array('hide_empty' => false));
         foreach($downloads_models as $downloads_model) { ?>
           <li> <a href="<?php echo get_term_link($downloads_model->slug, 'downloads_model') ?>"> <?php echo $downloads_model->name; ?></a></li>
         <?php } ?>
      </div>
    </div>
  </div>

  <div class="filter__wrapper">
    <p>Media Type:</p>
    <div class="dropdown show">
      <a class="btn btn-secondary dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Media type <img src="<?php echo get_template_directory_uri() ?>/images/filter_dropicon.svg" alt="Filter by type">
      </a>

      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
         <?php
         $downloads_types = get_terms('downloads_type', array('hide_empty' => false));
         foreach($downloads_types as $downloads_type) { ?>
           <li> <a href="<?php echo get_term_link($downloads_type->slug, 'downloads_type') ?>"> <?php echo $downloads_type->name; ?></a></li>
         <?php } ?>
      </div>
    </div>
  </div>

  <div class="clear">
  </div>

</div>
