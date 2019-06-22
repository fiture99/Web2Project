<?php
require "../login.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

require_once 'Task.php';

$full_name=$_POST['email'];
   





$task = new Driver();

$driver->full_name = $_POST['full_name'];



$newdriver = $driver->saveDriver();


if ($newDriver) {
    $_SESSION['main_driver'] = $_POST['full_name'];
    


    $_SESSION['success_message'] = 'Your login is successful';
   
} else {
    $_SESSION['error_message'] = 'Something went wrong';
}

header('Location:tasks.php?status=active'); //redirect
