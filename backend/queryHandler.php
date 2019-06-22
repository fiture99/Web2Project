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
            // dd($e->getMessage());
        }        
    }

    public function select($table){

        return $this->db->query("SELECT * FROM $table ORDER BY created_at DESC");
    
    }

    public function update($login, $table){

        $loginId = $login['id'];
        
        $loginStatus = $login['status'];

        return $this->db->query("UPDATE $table set status = '$loginStatus'  WHERE id = '$loginId'");
    
    }
    public function insert($login, $table){

        $email = $login['email'];
    
        return $this->db->query("INSERT into $table (`email`) values('$email')");
    
    }
}