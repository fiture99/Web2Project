<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    *{
        padding:0;
        margin: 0;
    }
    .header{
        padding: 20px;
        background-color: rgba(0, 0,0,0.8);
    }
    text-auto{
    text-align: center;
}
.text-center{text-align: center;}
.text-light{
    color: white;
}
.ml{
  margin: 2%;
}
.mr{
  margin: 2%;
}
.mt{
  margin: 2%;
}
.mb{
  margin: 2%;
}
.bg-primary{
    background-color: yellow;
}
.text-primary{
    color: yellow;
}
.text-secondary{
    color:green;
}
.bg-secondray{
   background-color: green;
}
    .logo-img{
    margin-top: 0px;
    margin-left: 0px;
}

.nav-bar{
    text-align: end;
    /* padding-top: 2px; */
    flex: -1;
}
.nav-div{
    display: flex;
    justify-content: space-between;
}
.nav-item{
    display: inline;
    list-style: none;
    color: white;
    letter-spacing: 3px;
    /* margin-right: 2%; */
    font-weight: bold;
    padding: 1em;
    padding-top: 1em;
    text-align: center;
    /* margin-top: 23px; */
}
.nav-bar a{
    text-decoration: none;
  
}
.nav-bar a :hover{
    background-color: yellow;
    color: green;
    border-bottom: 3px solid white;
    /* transition: 1000ms; */
    transform-origin:  0% 50%;
    
}
.nav-bar a :active{
    border-bottom: 3px solid white;
}
.profile{
    border-radius: 50%;
}
.main{
    display: flex;
    flex-direction: column;
}
.rating-status{
    /* display: flex; */
}
.bar{
    width: 60%;
    height: 15px;
    margin-bottom: 12px;
    border: 1px solid black;
    border-radius: 25px;
}
.bar .rate{
    background-color: blue;
    width: 50%;
    height: 15px;
    border-radius: 25px;
}.progressbars{
   display: flex;
   flex-direction: column;
  align-items: center;
  border: 1px solid black;
  padding: 1em
}
table{
    width: 50%;
    text-align: center;
    margin: auto;
    font-family: Georgia, 'Times New Roman', Times, serif;
}
tr{
    background-color:yellow;
    line-height: 2em;

}
</style>
<body>
    <div class="header">
            <nav class="nav nav-div">
                <div class="logo">
                    <a  href="backend/admin.php"> 
                       <img src="TAXI.png" width="70"  alt="logo" class="logo-img">
                       </a> 
                </div>
                <?php
                session_start();

                if(isset($_SESSION["email"]))  
 {  
      echo '<h2 style="color:yellow">Welcome - '.$_SESSION["email"].'</h2> ';
        
   }
   else  
{  
   session_destroy();  
     header("location:drivers.php");  
} ?>
                    <div>
                     <ul class="nav-bar">
                         <a href="index.php" class=""><li class="nav-item">Dashboard</li></a>
                         <a href="drivers_form.php"><li class="nav-item">Driver</li></a>
                         <a href="map.html"><li class="nav-item">Map</li></a>
                       <li class="nav-item"><a href="#"><img src="images/driver.jpg" class="profile" alt="profile" width="50" height="50"></a></li>
                     </ul>
                    </div>
        
                 </nav>
    </div>
    <div class="main">
            <div class="rating-status">
               
                     
                        <h2 class=" text-center">Personal Details</h2>
                        <div class="progressbars">
                            <h4 class="mb">Ratings (You rank 34)</h4>
                            <div class="bar"><div class="rate text-center text-light" style="width:60%">2</div></div>
                            <div class="bar"><div class="rate text-center text-light" style="width:20">4</div></div>
                            <div class="bar"><div class="rate text-center text-light" style="width:60%">6</div></div>
                            <div class="bar"><div class="rate text-center text-light" style="width:55%">8</div></div>
                            <div class="bar"><div class="rate text-center text-light" style="width:79%">10</div></div>
                            <hr>
                        </div>
                   <div class="primary-detail">
                       <table>
                        <tr>
                            <td>
                               Joined on:
                            </td>
                            <td>
                               31<sup>st</sup> December 2019
                            </td>
                        </tr>
                        <tr>
                            <td>
                               Number of Passangers:
                            </td>
                            <td>
                              33
                            </td>
                        </tr>
                        <tr>
                            <td>
                               langitude :
                            </td>
                            <td>
                              18.267366
                            </td>
                        </tr>
                        <tr>
                            <td>
                               latitude :
                            </td>
                            <td>
                             12.366383637
                            </td>
                        </tr>

                       </table>
               
                </div>
                

               
            </div>
            <div class="map">
                to show my position on the map
                <hr>
            </div>
        </div>
       
</body>

</html



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
      height: 50%;
      margin-top: 0%;
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
    <div class = "html, body"></div>
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
    </div>
</body>
</html>
