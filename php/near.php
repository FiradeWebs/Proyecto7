<?php 
include('conexion.php'); 
session_start();
if (!isset($_SESSION["usu_id"])){
	header("location:../index.php");					
}
?>
<!DOCTYPE html>
<?php
        
        extract($_REQUEST);
         $sql = "SELECT `usu_direccion`  FROM `tbl_usuario` WHERE `usu_id`=2";

        $mapa = mysqli_query($conexion, $sql);
         if(mysqli_num_rows($mapa)>0){
            while($mapas    =   mysqli_fetch_array($mapa)){
              $dir=$mapas['usu_direccion'];
            }

        }       
        $direccion= urlencode($dir);
 
        //Buscamos la direccion en el servicio de google
        $geocode=file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$direccion.'&sensor=false');
 
        //decodificamos lo que devuelve google, que esta en formato json
        $output= json_decode($geocode);
 
        //Extraemos la informacion que nos interesa
        $latitud = $output->results[0]->geometry->location->lat;
        $longitud = $output->results[0]->geometry->location->lng;



            //$sql = "SELECT * FROM `tbl_contactos` WHERE `usuc_id` = 1 ";


    //echo "$latitud";
    //echo "$longitud";

?>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Dirección de contacto</title>
    <head>
  <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="../favicon/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="../favicon/android-chrome-192x192.png" sizes="192x192">
  <link rel="icon" type="image/png" href="../favicon/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="../favicon/manifest.json">
  <link rel="mask-icon" href="../favicon/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="../favicon/favicon.ico">
  <meta name="apple-mobile-web-app-title" content="KnewAboutIt">
  <meta name="application-name" content="KnewAboutIt">
  <meta name="msapplication-TileColor" content="#00aba9">
  <meta name="msapplication-TileImage" content="../favicon/mstile-144x144.png">
  <meta name="msapplication-config" content="../favicon/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
    <!-- Latest compiled and minified CSS -->
  <meta http-equiv="Content-Type" content="text/html, charset=UTF-8">
  <meta name="mobile-web-app-capable" content="yes">
    
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0, user-scalable=0"> -->
    
    <link rel="stylesheet" type="text/css" href="../css/jTinder.css">
      <!-- jQuery lib -->
  <script type="text/javascript" src="../js/jquery.min.js"></script>
      <!-- transform2d lib -->
  <script type="text/javascript" src="../js/jquery.transform2d.js"></script>
      <!-- jTinder lib -->
  <script type="text/javascript" src="../js/jquery.jTinder.js"></script>
      <!-- jTinder initialization script -->
  <script type="text/javascript" src="../js/main.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/costum.css">
  <link rel="stylesheet" type="text/css" href="../css/jTinder.css">
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>


function initMap() {
  var la= parseFloat('<?php echo $latitud; ?>');
  var lo= parseFloat('<?php echo $longitud; ?>');
  var myLatLng = {lat: la , lng: lo};

  

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: myLatLng
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Posición del Contacto'
  });
  var infoWindow = new google.maps.InfoWindow({map: map});

  // Try HTML5 geolocation.
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };

      infoWindow.setPosition(pos);
      infoWindow.setContent('Tu localización');
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
                        'Error: The Geolocation service failed.' :
                        'Error: Your browser doesn\'t support geolocation.');


}

    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDaNQ_12n0sLg9-ZiUGmQRa3Zoa1HmJ4RI&callback=initMap">
    </script>
    <div id="status"></div>


  <div id="footer">
      <div id ="opcion1"><a href="perfil.php"><img id="img" src="../img/footer/ajuste_p.png"></a></div>
        <div id="opcion2"><a href="agenda.php"><img id="img" src="../img/footer/contacto_m.png"></a></div>
        <div id="opcion3"></div>
        <div id="opcion4"><a href="perfil.php"><img id="img" src="../img/footer/perfil_m.png"></a></div>
        <div id="opcion5"><a href="near.php"><img id="img"  src="../img/footer/ubicacion_m.png"></a></div>
        <div id="matchmaking"><a href="discover.php"><img id="logo" src="../img/footer/logo.png"></a></div>
  </div>

  </body>
</html>