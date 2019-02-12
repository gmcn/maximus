<?php

   $frontPageQuote = get_field('front_page_quote');
   $quotedPerson = get_field('quoted_person');
   $quotedCompany = get_field('quoted_company');

 ?>


  <div class="container-fluid quote">
    <div class="row">
      <div class="col-md-12 wow fadeIn">

        <p><?php echo $frontPageQuote ?></p>
        <?php echo $quotedPerson ?> | <?php echo $quotedCompany ?>

      </div>
    </div>
  </div>
