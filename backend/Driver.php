<?php

class Driver{

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

  public function getDrivers(){

     $drivers=$this->db->query("SELECT * FROM drivers");
     $drivers=$drivers->fetchAll(PDO::FETCH_ASSOC);
    //   var_dump($drivers);
    //   die;

      return  $drivers;
   
  }

public function getDriver(){

    $drivers=$this->db->query("SELECT * FROM drivers WHERE `id`='3'");
    $drivers=$drivers->fetch(PDO::FETCH_ASSOC);
   //   var_dump($drivers);
   //   die;

     return $drivers;
  
 }


}

$driverOne = new Driver();
$driver=$driverOne->getDrivers();
