
  <!-- <div class="row"> -->
    <div class="stick col-md-6">
      <div id="map">
    	</div>
    </div>
  </div>



</div>


<!-- <span class="metadata-marker" style="display: none;" data-region_tag="html-body"></span> -->

<script type="text/javascript">

function initMap() {

	var locations = [
		<?php while ( have_posts() ) : the_post();
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
		['<strong><?php echo $locationTitle; ?></strong>,<br /><?php echo $locationAddress; ?>,<br /><?php if ($locationTown) : ?><?php echo $locationTown ?>,<br /><?php endif; ?><?php if ($locationCounty) : ?><?php echo $locationCounty ?>,<br /><?php endif; ?><?php if ($locationPostcode) : ?><?php echo $locationPostcode ?>,<br /><?php endif; ?><?php if ($locationTelephone) : ?>T: <a href="tel:<?php echo $locationTelephone ?>"><?php echo $locationTelephone ?></a><br /><?php endif; ?><?php if ($locationFax) : ?>F: <?php echo $locationFax ?><br /><?php endif; ?><?php if ($locationEmail) : ?>E: <a href="mailto:<?php echo $locationEmail ?>"><?php echo $locationEmail ?></a><br /><?php endif; ?><?php if ($locationWebsite) : ?>W: <a href="http://<?php echo $locationWebsite ?>" target="_blank"><?php echo $locationWebsite ?></a><br /><?php endif; ?>', <?php echo $location['lat']; ?>, <?php echo $location['lng']; ?>, <?php echo $i; ?>],
		<?php endwhile; ?>
	];



	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 3,
		center: new google.maps.LatLng(54.5207816, -6.7622463),
		mapTypeId: google.maps.MapTypeId.ROADMAP
	});

	var infowindow = new google.maps.InfoWindow();

	var marker, i;

	for (i = 0; i < locations.length; i++) {
		marker = new google.maps.Marker({
			position: new google.maps.LatLng(locations[i][1], locations[i][2]),
			map: map
		});

		google.maps.event.addListener(marker, 'click', (function(marker, i) {
			return function() {
				infowindow.setContent(locations[i][0]);
				infowindow.open(map, marker);
			}
		})(marker, i));
	}
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRw6nI6HGEocm0dwOFZadZerDEj7CupLo&callback=initMap"
async defer></script>
