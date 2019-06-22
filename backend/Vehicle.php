<?php

class Vehicle{

    public $db;

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

  public function getVehicles(){

     $vehicles=$this->db->query("SELECT * FROM vehicles");
     $vehicles=$vehicles->fetchAll(PDO::FETCH_ASSOC);
    //   var_dump($drivers);
    //   die;

      return  $vehicles;
   
  }


}

$vehicle = new Vehicle();
$vehicle=$vehicle->getVehicles();
