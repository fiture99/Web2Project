<?php
function dd($dd){
    var_dump($dd);
    die;
}
class Driver{

public $db;
// public $fullName;
// public $email;
// public $phone;
// public $location;
// public $experiance;
// public $vehicle;
    

public function __construct()
{
    $dsn = 'mysql:host=localhost;dbname=Gam_taxi';
    $username = 'root';
    $password = 'LJ45';

    // connection
    try {
        $this->db = new PDO($dsn, $username, $password);
    } catch (Exception $e) {
        echo 'Sorry, Database connection error';
        exit;
        // dd($e->getMessage());
    }
}
public function all(){
    return $this->db->select('drivers', null, null);
}
public function getDrivers(){

 $drivers=$this->db->query("SELECT * FROM drivers");
  return  $drivers;

}
Public function insertDrivers(){
  
    $fullName=$_POST['fullName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    $licence=$_POST['licence'];
    $location=$_POST['location'];
    $experiance=$_POST['experiance'];
    $vehicle=$_POST['vehicle'];

    
    
     $drivers=$this->db->prepare("INSERT INTO drivers (`full_name`, `email`, `password`, `phone`, `licence_number`, `location`, `experiance`, `vehicle`) VALUES(:full_name,:email,:password,  :phone,:licence_number,:location,:experiance,:vehicle)");
      
     $driver = [
        'full_name'=> $fullName, 
        'email'=> $email, 
        'password'=> $password,
        'phone'=> $phone,
        'licence_number'=> $licence,
        'location'=> $location,
        'experiance'=> $experiance,
        'vehicle'=> $vehicle

    ];
    header("location:../contract.php");  

 $drivers=$drivers->execute($driver);
 dd($drivers);

 if($drivers){
   
   return true;
 }else{
     return false;
 }
}
}

$drivers= new Driver();

// $data=($fullname, $phone,$email);
// $fullname=$_GET['fullname'];

// var_dump($_GET);
$drivers=$drivers->insertDrivers();
// $getpassengers= $passangers->getPassangers();

var_dump($drivers);



