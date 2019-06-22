<?php  

 session_start();  
 $host = "localhost";  
 $username = "root";  
 
 $password = "LJ45";  
 $database = "Gam_taxi";  
 $message = "";  
 try  
 {  
      $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
      if(isset($_POST["login"]))  
      {  
           if(empty($_POST["full_name"]) || empty($_POST["password"]))  
           {  
                $message = '<label style="color:red">All fields are required</label>';  
           }  
           else  
           {  
                $query = "SELECT * FROM admins WHERE full_name = :full_name AND password= :password";  
                $statement = $connect->prepare($query);  
                $statement->execute(  
                     array(  
                          'full_name'     =>     $_POST["full_name"],  
                          'password'     =>     $_POST["password"]  
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                     $_SESSION["full_name"] = $_POST["full_name"];  
                     header("location:tasks.php");  
            }  
            else  
            {  
                 $message = '<label style="color:red">Wrong Data</label>';  
            }  
       }  
  }  
}  
catch(PDOException $error)  
{  
  $message = $error->getMessage();  
}  
