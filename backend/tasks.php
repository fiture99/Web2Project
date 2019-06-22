<?php
session_start();
// var_dump($_SESSION);
// exit;
require_once 'Task.php';

if (isset($_SESSION['error_message'])) {
    $errorMessage = "<div class='has-error'><span style='color: white'>$_SESSION[error_message]</span></div>";

    unset($_SESSION['error_message']);
}

// handle success flash message
if (isset($_SESSION['success_message'])) {
    $successMessage = "<div class='has-success'><span style='color: white'>$_SESSION[success_message]</span></div>";

    unset($_SESSION['success_message']);
}

$driver = new Driver();
// Task::getAll();

$status = $_GET['status'] ?? '';

$searchString = $_GET['driver'] ?? '';

$driversCategory = $_GET['status'] ?? 'All';

$drivers = $driver->getAll($status, $searchString);

 
  
 


require_once "../views/task.view.php";
