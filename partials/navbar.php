<header>

<div class="logo">
<a  href="../index.php"> 
   <img src="../TAXI.png" width="50"  alt="logo" class="logo-img">
   </a>
           </div>
          
           <?php
           
if(isset($_SESSION["full_name"]))  
 {  
      echo '<h2>Welcome - '.$_SESSION["full_name"].'</h2> ';
        
   }
   else  
{  
   session_destroy();  
     header("location:../backend/admin.php");  
} ?>
    
    <nav>
         <ul>
         <li><a href="../backend/tasks.php">All Drivers</a></li>
            <li> <a href="../backend/tasks.php?status=active">Active Drivers</a></li>
            <li><a href="../backend/tasks.php?status=offline">Offline Drivers</a></li>
            <li> <a href="../backend/tasks.php?status=deactivate">Deactivate Drivers</a></li>
            <li> <a href="../backend/admin.php" style="background: blue; color:yellow; padding: 10px 15px;">Logout</a></li>
        </ul>
    </nav>';

</header>