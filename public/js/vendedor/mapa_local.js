$(document).ready(function(){
	
  var latitud = -12.0431800;
  var longitud = -77.0282400;

  var mapObj = new GMaps({
    div: '#map',
    lat: latitud,
    lng: longitud
  });

  GMaps.geolocate({
    success: function(position) {
      console.log('Success');
      

      mapObj.setCenter(position.coords.latitude, position.coords.longitude);
      latitud = position.coords.latitude;
      longitud = position.coords.longitude;

      console.log("latitud 222: "+latitud);
      console.log("longitud 222: "+longitud);
      addMarket(mapObj, latitud, longitud);
      
    },
    error: function(error) {
      console.log('Geolocation failed: ' + error.message);
      addMarket(mapObj, latitud, longitud);
    },
    not_supported: function() {
      console.log("Your browser does not support geolocation");
      alert("Your browser does not support geolocation");
      addMarket(mapObj, latitud, longitud);
    },
    always: function() {
      
    }
  });

  console.log("latitud: "+latitud);
  console.log("longitud: "+longitud);
  
  
});

function addMarket(mapObj, latitud, longitud)
{
  cargar_datos(latitud, longitud);
  console.log("latitud 333: "+latitud);
  console.log("longitud 333: "+longitud);

  mapObj.addMarker({
    lat: latitud,
    lng: longitud,
    draggable: true,
    title: 'Tu tienda',
    infoWindow: {
      content: '<h5 class="black-text">Mi local</h5>',
      maxWidth: 200
    },
    dragend: function(e) {
      var latitud_market = e.latLng.lat();
      var longitud_market = e.latLng.lng();

      cargar_datos(latitud_market, longitud_market);
    }
  });
}

function cargar_datos(latitud, longitud)
{
  $.ajax({
    data:{
      'latitud':latitud,
      'longitud':longitud
    },
    method:"POST",
    url: base_url+'usuario/tienda/ajax_obtener_direccion',
    success:function(data)
    {
      document.getElementById("direccionLocal").value = data;
      Materialize.updateTextFields();
    }
  });

  document.getElementById("latitud").value = latitud;
  document.getElementById("longitud").value = longitud;
}