<div class="sec-contacto">
  <section class="content-grid">
    <div class="google-map">
      <div class="text-map">
        <div class="text-center">
          <h2>Localiza un punto de venta <br>Reelance</h2>
          <p>Reelance te guiará para que encuentres el punto de venta<br> más cercano a tu ubicación actual</p>
          <a id="buscarPunto" class="btn-style-cont btn-black" data-toggle="collapse" href="#submenuReelContacto" aria-expanded="false" role="button" aria-controls="submenuReelContacto">Buscar</a>
        </div>
      </div>
      <img class="google-fondo" src="images/assets/fondo-mapa.jpg" />
      <div id="gmaps-ree" class="gmaps-ree"></div>
    </div>
  </section>

  <div class="collapse" id="submenuReelContacto">
    <section class="cont-puntos">
      <div class="container">
        <div class="row">
          <?php foreach ( [0,1,2] as $key => $value) { ?>
          <div class="col-sm-4 item-punto">
            <ul>
              <li><h3>Nombre Establecimiento</h3></li>
              <li>2km</li>
              <li>Guadalajara, Jalisco, México</li>
              <li><i class="icre-phone-call"></i> 044-331-554 - 18-93</li>
            </ul>
          </div>
          <?php }  ?>
        </div>
      </div>
    </section>
  </div>

  <section class="cont-escribenos">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center text-escribenos">
          <h2>Escríbenos</h2>
          <p>Guadalajara, Jalisco, México</p>
          <ul>
            <li><i class="icre-mail"></i> ventas@reelance.mx </li>
            <li><i class="icre-phone-call"></i> 044-33-554-8-93 </li>
          </ul>
        </div>
      </div>
      <div class="row row-redes-cont">
        <div class="col-sm-6 text-right">
          <a href="#" class="btn-style-cont btn-whatsapp"><i class="icre-whatsapp"></i> WhatsApp</a>
        </div>
        <div class="col-sm-6">
          <a href="#" class="btn-style-cont btn-messenger"><i class="icre-messenger"></i> Messenger</a>
        </div>
      </div>
    </div>
  </section>
</div>

<script>
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      var map, infoWindow;
      function initMap() {
        map = new google.maps.Map(document.getElementById('gmaps-ree'), {
          gestureHandling: 'cooperative',
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
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAPHdv5kNOYV7LqB7a6jJR3plPbabTzzmA&callback=initMap"></script>