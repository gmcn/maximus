<div class="container-fluid case-studies">

	<div class="row">
		<?php
		if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) : the_post();

      $csCountry = get_field('cs_country');

			?>

			<div class="col-md-4 case-study wow fadeInUp">
				<div class="row case-study__wrapper">
						<div class="col-md-6 matchheight" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) center center; background-size: cover">

						</div>
						<div class="col-md-6 matchheight">

              <h2><?php the_title(); ?></h2>

              <p><?php echo $csCountry ?></p>

              <a href="<?php echo the_permalink(); ?>">
                See Case Study
  						</a>

						</div>
				</div>
			</div>

			<?php endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
	</div>

</div>
