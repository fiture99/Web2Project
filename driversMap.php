<?php   
 require('backend/Driver.php');

 $oneDriver=$driverOne->getDriver();
 $twoDriver=$driverOne->getDriver();

//  var_dump($oneDriver);
//  die;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MAP</title>
  <style>
    /* Always set the map height explicitly to define the size of the div
     * element that contains the map. */
    #map {
      height: 100%;
      margin-top: 50%;
    }
    /* Optional: Makes the sample page fill the window. */
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }
    button{
      width: 100%;
      margin: 0;
      background-color: yellowgreen;
      border-radius: 5px;
    }
    a{
      color:black;
      text-sty
    }
  </style>
</head>
<body>
<div id="map"></div>
  <script>
    function initMap(){
      // Map options
      var options ={
      zoom:9,
      center:{lat: 13.4458, lng: -15.3061}
    }

      // New map
      var map = new google.maps.Map(document.getElementById('map'), options);

      

      // Array of markers
      addMarker({
       coords:{lat: 13.4549, lng: -16.5790},
    });
    
      // Add Marker Function
      function addMarker(props){
        var marker = new google.maps.Marker({
          position:props.coords,
          map:map,
          //icon:props.iconImage
        });

        

        // Check content
        if(props.content){
          var infoWindow = new google.maps.InfoWindow({
            content:props.content
          });

          marker.addListener('click', function(){
            infoWindow.open(map, marker);
          });
        }
      }
    }
  </script>
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBn_v0i69TWpqd-HhqNrxm8bUiRPLyxC0A&callback=initMap">
    </script>
</body>
</html>
