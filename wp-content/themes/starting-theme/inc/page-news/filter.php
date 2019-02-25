<div class="filter">

  <div class="filter__wrapper">
    <p>Filter By: </p>
    <div class="dropdown show">
      <a class="btn btn-secondary dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Filter by year <img src="<?php echo get_template_directory_uri() ?>/images/filter_dropicon.svg" alt="Filter by year ">
      </a>

      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <li><a class="dropdown-item" href="/news/">All Years</a></li>
        <?php wp_get_archives('type=yearly&format=html'); ?>
      </div>
    </div>
  </div>

  <div class="filter__wrapper">
    <p>Filter By: </p>
    <div class="dropdown show">
      <a class="btn btn-secondary dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Filter by type <img src="<?php echo get_template_directory_uri() ?>/images/filter_dropicon.svg" alt="Filter by type">
      </a>

      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <li><a class="dropdown-item" href="/news/">All</a></li>
        <?php wp_list_categories(array( 'title_li' => '' )); ?>
      </div>
    </div>
  </div>

  <div class="clear">
  </div>

</div>
