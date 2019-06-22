
<?php
 require_once('backend/Vehicle.php'); 
//  var_dump($vehicle);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vehicle Page</title>
</head>

<body>

  
<div class="header">
       <nav class="nav nav-div">
       <div class="logo">
    <a  href=" backend/admin.php"> 
   <img src="TAXI.png" width="70"  alt="logo" class="logo-img">
   </a>
           </div>
           
            <ul class="nav-bar">
                <a href="index.php" class="nav-item"><li class="nav-item">Dashboard</li></a>
                <a href="vehicle.php"> <li class="nav-item">Vehicles</li></a>
                <a href="drivers.php"><li class="nav-item">Driver</li></a>
                <a href="map.php"><li class="nav-item">Map</li></a>
            </ul>
           

        </nav>

         
           <div class="box">
               <div class="item1">
                     <div class="header-text">
               <h3 class="text-light">"Just few Clicks"</h3>
               <p class="text-light">Travel with convenience and experiance the world of simplicity</p>

                      </div>
               </div>
          
           <div class="form-overlaye">
            <h2 class="text-auto text-light mt">Register your vehicleDocument with us</h2>
                <form action="backend/newVehicle.php" class="form" method="POST">

                
            
                    <div class="form-group">
                        <input type="text" name="fullName" placeholder="Fullname" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="vehicle" placeholder="Vehicle mark" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="vehicleNumber" placeholder="Vehicle Number eg. BJL 0000 N" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="insurance" placeholder="Insurance company" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="model" placeholder="Model" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" placeholder="Phone Number" class="form-control"> 
                        </div>
                        <div class="form-group">
                        <input type="text" name="location" placeholder="Location" class="form-control"> 
                        </div>
                        <div class="form-group">
                        
                        <input type="text" name="question" placeholder="Are you looking for a driver?" class="form-control"> 

                    </div>
                        
                        <div class="form-group">
                        <button type="submit" class="form-control bg-primary text-light" style ="color:green" name = "register">Register</button>
                    </div>
              


          
          
                </form>
                </div> 
                </div>
                </div>   
        <h2 style="text-align:center;">This are the Details of Some of our Vehicles</h2>
        <div class="main">
        <?php
        
        foreach ($vehicle as $vehicle) {
           # code...
           $fullname=$vehicle['full_name'];
           $vehicleMarke=$vehicle['vehicle_marke'];
           $vehicleNember=$vehicle['vehicle_number'];
           $insurance=$vehicle['insurance'];
           $model=$vehicle['model'];
           $phone=$vehicle['phone'];
           $location=$vehicle['location'];
           $question=$vehicle['question'];

                 
      echo" <div class='card'>
                
           <div class='card-body'>

           <table class='table mt'>
               <tr>
                   <td>Vehicle</td>
                   <td> $vehicleMarke</td>
               </tr>
               <tr>
                   <td>Experience: </td>
                   <td>$vehicleNember</td>
               </tr>
              
               <tr>
                   <td>Insurance Company</td>
                   <td><a href='#'>$insurance</a></td>
               </tr>
               <tr>
                   <td>Vehicle Model</td>
                   <td><a href='#'>$model</a></td>
               </tr>
               <tr>
                   <td>Contact Number</td>
                   <td><a href='#'>$phone</a></td>
               </tr>
               
               <tr>
                   <td>Current Location</td>
                   <td><a href='#'>$location</a></td>
               </tr>
                  
           </table>
           <hr>
           <a href='#' class='btn-link'>
               <button class='btn mt'>HIRE</button></a>
           
           </div>
           </div>
       
       
       ";

       } 
       ?>
   </div>



   
    
    
</body>
</html>

<?php include_once 'style.php';  ?>
<?php require_once 'backend/tasks.php'; ?>

<?=include_once "backend/newVehicle.php";?>
<!-- // include_once 'indec-processro.php';
// 
// ?> -->