<?php
function dd($dd){
    var_dump($dd);
    die;
}
class Vehicle{

// public $db;
// public $fullname;
// public $vehicleMarke;
// public $vehicleNember;
// public $insurance;
// public $experiance;
// public $model;
    

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
    return $this->db->select('vehicles', null, null);
}
public function getVehicles(){

 $vehicles=$this->db->query("SELECT * FROM vehicles");
  return  $vehicles;

}
Public function insertVehicles(){
  
           $fullname=$_POST['fullName'];
           $vehicleMarke=$_POST['vehicle'];
           $vehicleNember=$_POST['vehicleNumber'];
           $insurance=$_POST['insurance'];
           $model=$_POST['model'];
           $phone=$_POST['phone'];
           $location=$_POST['location'];
           $question=$_POST['question'];

    
    
     $vehicles=$this->db->prepare("INSERT INTO vehicles (`full_name`, `vehicle_marke`, `vehicle_number`, `insurance`, `model`, `phone`, `location`, `question`) VALUES(:full_name,:vehicle_marke,:vehicle_number,  :insurance,:model,:phone,:location,:question)");
      
     $vehicle = [
        'full_name'=> $fullname, 
        'vehicle_marke'=> $vehicleMarke, 
        'vehicle_number'=> $vehicleNember,
        'insurance'=> $insurance,
        'model'=> $model,
        'phone'=> $phone,
        'location'=> $location,
        'question'=> $question

    ];
 $vehicles=$vehicles->execute($vehicle);
 dd($vehicles);

 if($vehicles){
   
   return true;
 }else{
     return false;
 }
}
}

$vehicles= new Vehicle();

// $data=($fullname, $phone,$email);
// $fullname=$_GET['fullname'];

// var_dump($_GET);
$vehicles=$vehicles->insertVehicles();
// $getpassengers= $passangers->getPassangers();

var_dump($vehicles);



