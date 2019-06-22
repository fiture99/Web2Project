<?php
require 'functions.php';
require_once 'Task.php';

$driver = new Driver;

$id = $_POST['driver-id'];

$status = $_POST['status'];

// update task;
$update = $driver->updateDriver(['id' => $id, 'status' => $status]);

if($update){
    redirect("tasks.php");
}

