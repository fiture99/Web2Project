<?php

class QueryHandler {

    public $db;

    public function __construct($db = null)
    {
        $dsn = 'mysql:host=localhost;dbname=Gam_taxi';
        $username = 'root';
        $password = 'LJ45';

        // connection
        try {
            $this->db = new PDO($dsn, $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        } catch (Exception $e) {
            echo 'Sorry, Database connection error';
            exit;
        }        
    }

    public function select($table, $status, $searchString){
        $where = " WHERE 1 ";
        if($status){
            $where .= " AND status = '$status' ";
        }
        if($searchString){
            $where .= " AND full_name LIKE '%$searchString%' ";
        }
       
        return $this->db->query("SELECT * FROM $table $where ORDER BY created_at DESC");
        
    
    }

    public function update($driver, $table){

        $driverId = $driver['id'];
        
        $driverStatus = $driver['status'];

        return $this->db->query("UPDATE $table set status = '$driverStatus'  WHERE id = '$driverId'");
    
    }
    public function insert($driver, $table){

        $full_name = $driver['full_name'];
    
        $newDriver = $this->db->query("INSERT into $table (`full_name`) values('$full_name')");

        //save the id of the just inserted task
        $_SESSION['driver_id'] = $this->db->lastInsertId();

        return $newDriver;
    
    }
}