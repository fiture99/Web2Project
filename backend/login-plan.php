<?php  
 //login_success.php  
 session_start();  
 if(isset($_SESSION["email"]))  
 {  
      echo '<h3> Welcome - '.$_SESSION["email"].'<br> Drive Savely</h3>';  
      echo '<br /><br /><a href="logout.php">Logout</a>';  
 }  
 else  
 {  
      header("location:../login.php");  
 }  
 ?> 



