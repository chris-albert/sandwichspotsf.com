<?php
/**
 * Template Name: Directions TSS
 *
 */

get_header(); 


?>
	
	<section id="content" class="paper-back" >
		<div id="top-boo"></div>
		<div id="left-boo"></div><div id="right-boo"></div>
		
		<div id="directions-content">
			<img class="address" src="<?php bloginfo('template_url'); ?>/images/love-all-h.png" alt="Love All Feed all" style="margin-bottom:4px;margin-top:12px;" />
			<div id="gmap">
			
			</div>
			<img class="address" src="<?php bloginfo('template_url'); ?>/images/address.png" alt="Address" style="padding-right:8px;" />
			<div id="d-links">
				<div class="link-button">
					<a href="http://maps.google.com/maps?saddr=&daddr=3213%20Pierce%20St.%20San Francisco,%20CA%2094123" target="blank">Get Directions</a>
					<span class="end-piece"></span>
				</div>
				<div class="link-button">
					<a id="spot-hours" href="#hours-sign">Spot Hours</a>
					<span class="end-piece"></span>
				</div>
			</div>
			
		</div>
		
		<div id="bottom-boo"></div>
		
	</section>
	<section id="hours-sign">
		<div class="chain" style="left:80px;top:-46px;"></div>
		<div class="chain" style="left:375px;top:-46px;"></div>
		<div class="chain" style="left:634px;top:-46px;"></div>
		<div class="chain" style="right:78px;top:-46px;"></div>
	</section>
	
	
	
<script type="text/javascript"
				src="http://maps.google.com/maps/api/js?sensor=false">
			</script>
			<script type="text/javascript">
			  var geocoder;
			  var map;
			  
			  function initialize() {
				geocoder = new google.maps.Geocoder();
				var myOptions = {
				  zoom: 15,
				  mapTypeId: google.maps.MapTypeId.ROADMAP,
				  panControl: false,
				  zoomControl: true,
				  mapTypeControl: false,
				  scaleControl: false,
				  streetViewControl: true,
				  overviewMapControl: false,
				  scrollwheel:false

				};
				map = new google.maps.Map(document.getElementById("gmap"), myOptions);
				
			  /*
				var myLatLng = new google.maps.LatLng(34.0445884, -117.2371614);
				var marker = new google.maps.Marker({
					  position: myLatLng,
					  map: map,
					  zoom: 11,
					  center: myLatLng,
					  title:"Marker"
				  }); */
				  
				var address = '3213 Pierce St. San Francisco, CA 94123';
				geocoder.geocode( { 'address': address}, function(results, status) {
				  if (status == google.maps.GeocoderStatus.OK) {
					map.setCenter(results[0].geometry.location);
					var marker = new google.maps.Marker({
						map: map, 
						position: results[0].geometry.location
					});
				  } else {
					alert("Geocode was not successful for the following reason: " + status);
				  }
				});
			   }

				$(document).ready(function(){
					initialize();
				});
			</script>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
