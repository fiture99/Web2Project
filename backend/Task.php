<?php

require 'QueryHandler.php';



class Driver
{
    // properties: think of them as variables;
    // methods: think of these as normal functions, but inside a class
    public $full_name;
   
    public $query;

    public function __construct()
    {
      $this->query = new QueryHandler;
    }
    public function saveDiver()
    {
        $driver = ['full_name' => $this->full_name];

        return $this->query->insert($driver, 'drivers');
        
    }

    public function updateDriver(Array $driver){
    
        $updateDriver = $this->query->update($driver, 'drivers');
        
        return $updateDriver;
        
    }
    
    public function getAll($status, $searchString)
    {
        
       
        $drivers = $this->query->select('drivers', $status, $searchString);
        return $drivers;
    }

}

//Instantiation; new up;
/* $task = new Task('Continue learning OOP');

echo 'Task description: ' . $task->description;
exit;
$task->saveTask(); */
