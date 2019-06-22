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

      // Listen for click on map
      

      /*
      // Add marker
      var marker = new google.maps.Marker({
        position:{lat:42.4668,lng:-70.9495},
        map:map,
        icon:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'
      });

      var infoWindow = new google.maps.InfoWindow({
        content:'<h1>Lynn MA</h1>'
      });

      marker.addListener('click', function(){
        infoWindow.open(map, marker);
      });
      */

      // Array of markers
      var markers = [
      {
       coords:{lat: 13.4549, lng: -16.5790},
       content:"<table><th>Driver</th><tr><td><?= $oneDriver['full_name'];?></td></tr><tr><td><?= $oneDriver['phone'];?></td></tr><tr><td><?= $oneDriver['vehicle_number'];?></td></tr><tr><td><button type ='submit' name = 'taxi'>Hire</button></td></tr></table>"
    },
    {
      coords:{lat: 13.4794, lng: -16.6704},
      content:"<table><th>Driver</th><tr><td><?= $twoDriver['full_name'];?></td></tr><tr><td><?= $twoDriver['phone'];?></td></tr><tr><td><?= $twoDriver['vehicle_number'];?></td></tr><tr><td><button type ='submit' name = 'taxi'>Hire</button></td></tr></table>"
    },
    {
      coords:{lat: 13.4503, lng: -16.6881},
      content:"<table><th>Driver</th><tr><td><?= $oneDriver['full_name'];?></td></tr><tr><td><?= $oneDriver['phone'];?></td></tr><tr><td><?= $oneDriver['vehicle_number'];?></td></tr><tr><td><button type ='submit' name = 'taxi'>Hire</button></td></tr></table>"
    },
    {
      coords:{lat: 13.3998, lng: -16.7323},
      content:'<form> <input type ="text" placeholder = "Enter your Current Location"><button type ="submit" name = "taxi">Hire</button> </form>'
    },
    {
      coords:{lat: 13.2748, lng: -16.6409},
      content:'<form> <input type ="text" placeholder = "Enter your Current Location"><button type ="submit" name = "taxi">Hire</button> </form>'
    },
    {
      coords:{lat: 13.422, lng: -16.7264},
      content:'<form> <input type ="text" placeholder = "Enter your Current Location"><button type ="submit" name = "taxi">Hire</button> </form>'
    },
    {
      coords:{lat: 13.4347, lng: -14.6573},
      content:'<form> <input type ="text" placeholder = "Enter your Current Location"><button type ="submit" name = "taxi">Hire</button> </form>'
    },
    {
      coords:{lat: 13.4442, lng: -15.5386},
      content:'<form> <input type ="text" placeholder = "Enter your Current Location"><button type ="submit" name = "taxi">Hire</button> </form>'
    },
    {
      coords:{lat: 13.3094, lng: -14.2192},
      content:'<form> <input type ="text" placeholder = "Enter your Current Location"><button type ="submit" name = "taxi">Hire</button> </form>'
    }
      ];

      // Loop through markers
      for(var i = 0;i < markers.length;i++){
        // Add marker
        addMarker(markers[i]);
      }

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
