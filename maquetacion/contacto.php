<section class="content-grid">
	<div id="gmaps-ree" class="gmaps-ree"></div>
</section>
<script>
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      var map, infoWindow;
      function initMap() {
        map = new google.maps.Map(document.getElementById('gmaps-ree'), {
          center: {lat: 4.662390, lng: -74.109183},
          zoom: 6
        });
        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            var marker = new google.maps.Marker({position: pos, map: map});
            infoWindow.setPosition(pos);
            infoWindow.setContent('Ubicación encontrada.');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: El servicio de geolocalización ha fallado.' :
                              'Error: Tu navegador no admite geolocalización.');
        infoWindow.open(map);
      }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?callback=initMap"></script>