<div class="filter">

    <div class="filter__wrapper">
      <p>Select a country</p>
      <div class="dropdown show">
        <a class="btn btn-secondary dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          COUNTRY <img src="<?php echo get_template_directory_uri() ?>/images/filter_dropicon.svg" alt="Filter by Area">
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
           <?php
           $partners_countries = get_terms('partners_country', array('hide_empty' => false));
           foreach($partners_countries as $partners_country) { ?>
             <li> <a href="<?php echo get_term_link($partners_country->slug, 'partners_country') ?>"> <?php echo $partners_country->name; ?></a></li>
           <?php } ?>
        </div>
      </div>
    </div>

    <!-- <div class="filter__wrapper">
      <a href="/products">Show All</a>
    </div> -->

  </div>
