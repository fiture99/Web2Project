<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gam Taxi</title>
</head>

<body>

  
<div class="header">
       <nav class="nav nav-div">
       <div class="logo">
<a  href="backend/admin.php"> 
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
          
           <form action="backend/passengers.php" class="form" method="POST">
           
        /
             <span id="error-message" style="font-size: 14px; text-align: left; margin-bottom: 4px; color: red;"></span>
            <h2 class="text-auto text-light">Get a Driver</h2>
               
                    <div class="form-group">
                        <input type="text" name="fullname" placeholder="Fullname" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" placeholder=" Email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" placeholder="Phone Number" class="form-control"> </div>
                        <div class="form-group">
                        <button type="submit" class="form-control bg-primary text-light" style="color:green">Send</button>
                    </div>
              


          
          
                </form>
                </div>    
</div>


</div>
</div>

   
   <div class="main">
       <div class="card">
           
           <h3>Our Drivers</h3>
           <div class="card-body">
           <hr>
             <div class="toal-drivers">
                 <h4 class="text-secondary">(500)</h4>
                 <p>Qualified drivers all over the country</p>
               <i class="fa fa-car fa-lg fa-4x" aria-hidden="true"></i>
             </div>
           <!-- <a href="#" class="btn-link">
                <button class="btn mt">Board</button></a> -->
           
           </div> 
       </div>

       <div class="card">
           
           <h3>Our Vicles</h3>
           <div class="card-body">
           <hr>
             <div class="toal-drivers">
                 <h4 >(500)</h4>
                 <p>Pay in convineince with codoo Money</p>
                 <p>or in cash</p>
                 
          <i class="fas fa-car fa-4x fa-lg "></i>
             </div>
           <!-- <a href="#" class="btn-link"> -->
               <!-- <button class="btn mt">Board</button></a> -->
           
           </div>
       </div>

       <div class="card">
           
           <h3>Navigation</h3>
           <div class="card-body">
           <hr>
             <div class="total-drivers">
                 <p class="text-primary">(500)</p>
                 <p>Travel all ovr ther country with convineince</p>
                 <p>Qualified drivers all over the country</p>
                <!-- <i class="fas fa-red-river"></i> -->
                <i class="fas fa-map-signs fa-4x" aria-hidden="true"></i>
             </div>
           <!-- <a href="#" class="btn-link"> -->
               <!-- <button class="btn mt">Board</button></a> -->
           
           </div>
       </div>
      
       
   </div>
   <div class="main-content">
         
    <button class="board">Board a Taxi</button>
</div>

</div>
<h3 class='h3'>Maps of Top Cities and Towns</h3>
<div class="main">

       <div class="card">
           <img src="./images/banjul.jpg" alt="">
           <h3>Banjul</h3>
           <div class="card-body">

           <table class="table mt">
           
              
           </table>
           <hr>
           <a href="https://goo.gl/maps/iT9tyDFrDULegSvR7"  class="btn-link">
               <button class="btn mt">Visit</button></a>
           
           </div>
       </div>
       <div class="card">
       <img src="./images/bakau.jpg" alt="">
           <h3>Bakua</h3>
           <div class="card-body">

           <table class="table mt">
               
           </table>
           <hr>
           <a href="https://goo.gl/maps/3SxqkpUYccTZeCq59"  class="btn-link">
               <button class="btn mt">Visit</button></a>
       </div>
       </div>
       
   <div class="card">
       <img src="./images/serekunda.jpg" alt="">
           <h3>Serekunda</h3>
           <div class="card-body">

           <table class="table mt">
              
           </table>
           <hr>
           <a href="https://goo.gl/maps/hDNqwogwVh6E93wYA"  class="btn-link">
               <button class="btn mt">Visit</button></a>
       </div>
   </div>
   
   <!-- #######################################################################3 -->
       <div class="card">
       <img src="./images/brusubi.jpeg" alt="">
           <h3>Brusubi</h3>
           <div class="card-body">

           <table class="table mt">
               
           </table>
           <hr>
           <a href="https://goo.gl/maps/XhRYwYK8Tw2zjBty7"  class="btn-link">
               <button class="btn mt">Visit</button></a>
           
           </div>
       </div>
       <div class="card">
       <img src="./images/brikama.jpeg" alt="">
           <h3>Brikama</h3>
           <div class="card-body">

           <table class="table mt">
               
           </table>
           <hr>
           <a href="https://goo.gl/maps/jJQYh2eR675NhDUS6"  class="btn-link">
               <button class="btn mt">Visit</button></a>
       </div>
       </div>
       
   <div class="card">
   <img src="./images/bijilo.jpeg" alt="">
           <h3>Bijilo</h3>
           <div class="card-body">

           <table class="table mt">
              
           </table>
           <hr>
           <a href="hhttps://goo.gl/maps/8RV1xKE11NR4ozcd9"  class="btn-link">
               <button class="btn mt">Visit</button></a>
       </div>
   </div>
   </div>
   <div class="main">
       <div class="card">
           <img src="./images/bansang.jpg" alt="">
           <h3>Bansang</h3>
           <div class="card-body">

           <table class="table mt">
               
           </table>
           <hr>
           <a href="https://goo.gl/maps/ag2gMiQTLE8rm5Vv8"  class="btn-link">
               <button class="btn mt">Visit</button></a>
           
           </div>
       </div>
       <div class="card">
       <img src="./images/soma.jpeg" alt="">
           <h3>Soma</h3>
           <div class="card-body">

           <table class="table mt">
               
           </table>
           <hr>
           <a href="https://goo.gl/maps/ag2gMiQTLE8rm5Vv8"  class="btn-link">
               <button class="btn mt">Visit</button></a>
       
       
       </div>
       </div>
       <div class="card">
       <img src="./images/basse.jpg" alt="">
           <h3>Basse</h3>
           <div class="card-body">

           <table class="table mt">
               
           </table>
           <hr>
           <a href="https://goo.gl/maps/9JhKwXnuejQ1S48J6"  class="btn-link">
               <button class="btn mt">Visit</button></a>
       
       
       </div>
       
   </div>
   <footer>
 <div class="footer-content">

 <H3 class="text-auto text-light">Contac Us On 7741439 / 3167095</H3> 
<p class="text-auto text-light"> Copywrite (c) BcTech and Jawneh</p>
</div>
<hr>
<a href="#" class="terms">terms and conditions</a>
<hr>


</footer>
   
</body>
</html>
<?=include_once 'style.php';
?>




