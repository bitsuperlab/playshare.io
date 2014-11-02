/************************/
/*  G M A P  FRAMEWORK  */
/***********************/

jQuery(function($){
	
	// Ready Functions
	$(document).ready(function() {
		
		// Map Setup
		var url = 'http://maps.google.com/maps/api/geocode/json?address=' + $('#gmap').data('address') + '&sensor=false';
		$.getJSON(url, function(JSONsearch) {
			var lat = JSONsearch.results[0].geometry.location.lat;
			var lng = JSONsearch.results[0].geometry.location.lng;
			$('#gmap').attr('data-lat',lat);
			$('#gmap').attr('data-lng',lng);
		});
	
	
		// Markers Setup
		$('#gmap_markers .gmap_marker').each(function(index){
			
			var htmlId = parseInt(index)+1; htmlId = 'm'+htmlId;
			var url = 'http://maps.google.com/maps/api/geocode/json?address=' + $(this).data('mark-address') + '&sensor=false';
			$(this).attr('id', htmlId);
			
			// Lat/Lng
			$.getJSON(url, function(JSONsearch) {
				var lat = JSONsearch.results[0].geometry.location.lat;
				var lng = JSONsearch.results[0].geometry.location.lng;
				$('#'+htmlId).attr('data-lat',lat);
				$('#'+htmlId).attr('data-lng',lng);
				
			});
			
		});
		
	
	});
	

	// Load Functions
	$(window).load(function() {

		
		// Map Options
		var lat = $('#gmap').data('lat');
		var lng = $('#gmap').data('lng');
		var zoom = $('#gmap').data('zoom');
		var color =$('#gmap').data('color');
		var saturation = $('#gmap').data('saturation');
		var mapCoord = new google.maps.LatLng(lat, lng);	
		var styles = [{
			stylers: [
			  { hue: color },
			  { saturation: saturation }
			]
		  },{
			featureType: "road",
			elementType: "geometry",
			stylers: [
			  { lightness: 100 },
			  { visibility: "simplified" }
			]
		  },{
			featureType: "road",
			elementType: "labels",
			stylers: [
			  { visibility: "off" }
			]
		}];
		
		// Create the Map
		var map = $('#gmap').gmap({
			center : mapCoord,
			zoom : zoom,
			scrollwheel: false,			
			zoomControl: true,
			disableDefaultUI : true,
			styles : styles,
			mapTypeId : google.maps.MapTypeId.ROADMAP,
		});  
	
		
		// Add Markers
		$('#gmap_markers .gmap_marker').each(function(){
			
			var mkCoord = new google.maps.LatLng($(this).data('lat'), $(this).data('lng'));
			var marketHTML = $(this).html();
			
			map.gmap('addMarker', { 
				position:  mkCoord, 
				bounds: false, 
				options : { 
					icon : new google.maps.MarkerImage("img/marker.png")
				} 
			}).click(function() {
					map.gmap('openInfoWindow', { content : marketHTML }, this);
			});
			
		});
		
	});
	
	
});