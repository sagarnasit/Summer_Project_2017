@extends('Boot.master')
@section('title')
    <title>Store Locator</title>
@stop
@section('body')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      #map{
        height: 400px;
        width: 100%;
        margin-bottom: 10px;
        border: 1px solid black;
}
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
      function initMap(){
        var options ={
          zoom:14,
          center:{lat:23.1885, lng:72.6290}
        }
        var map = new google.maps.Map(document.getElementById('map'),options);

        var marker=new google.maps.Marker({
          position:{lat:23.1885, lng:72.6290},
          map:map
        });
        var infoWindow = new google.maps.InfoWindow({
          content:'<h5>BOOT STORE</h5>'
        });
        marker.addListener('mouseover', function(){
          infoWindow.open(map, marker);
        });
        marker.addListener('mouseout', function(){
          infoWindow.close(map, marker);
        });
      }
    </script>
   <script async defer
   src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApgq7JRHwq7s2UqnKKss0iapGaG8NfYZg&callback=initMap">
   </script>
  </body>
</html>
@stop
