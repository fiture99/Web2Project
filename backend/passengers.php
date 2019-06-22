<?php
 session_start();  
class Passenger{

public $db;

public function __construct()
{
    $dsn = 'mysql:host=localhost;dbname=Gam_taxi';
    $username = 'root';
    $password = 'LJ45';
    $message = "";  

    // connection
    try {
        $this->db = new PDO($dsn, $username, $password);
        
    } catch (Exception $e) {
        echo 'Sorry, Database connection error';
        exit;
        // dd($e->getMessage());
    }
}

public function getPassangers(){

 $passengers=$this->db->query("SELECT * FROM passengers");
  return  $passengers;

}
public function insertPassangers(){
  
$fullName=$_POST['fullname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message='';


// if(empty($_POST['fullname']) || empty($_POST['email']) || empty($_POST['phone'])){
//     $message = '<label style="color:red">All fields are required</label>';
//  }
// else{
 $passengers=$this->db->prepare("INSERT INTO passengers (`full_name`, `email`, `phone`) VALUES(:full_name, :phone,:email)");
 $passenger = [
    'full_name'=> $fullName, 
    'email'=> $email, 
    'phone'=> $phone
];
 $passengers=$passengers->execute($passenger);
 if($passengers){
   
   return true;
 }else{
     return false;
 }
}
}

$passengers= new Passenger();

// $data=($fullname, $phone,$email);
// $fullname=$_GET['fullname'];

// var_dump($_GET);
$passengers=$passengers->insertPassangers();
// $getpassengers= $passangers->getPassangers();

$_SESSION['success']="you ca no w choose a driver";

header('location: ../map.php');
var_dump($passengers);

// if(empty($_POST["fullname"]) || empty($_POST["email"]) || empty($_POST["email"]))  
//            {  
//                 $message = '<label style="color:red">All fields are required</label>';  
//            }  
//            else  
//            {  
//                 $query = "SELECT * FROM drivers WHERE email = :email AND password= :password";  
//                 $statement =  $this->db->prepare($query);  
//                 $statement->execute(  
//                      array(  
//                           'full_name'     =>     $_POST["fullname"],  
//                           'email'     =>     $_POST["email"]  
//                      )  
//                 );  
//                 $count = $statement->rowCount();  
//                 if($count > 0)  
//                 {  
//                      $_SESSION["email"] = $_POST["email"];  
//                      header("location:login-plan.php");  
//             }  
//             else  
//             {  
//                  $message = '<label style="color:red">Wrong Data</label>';  
//             }  
//         }