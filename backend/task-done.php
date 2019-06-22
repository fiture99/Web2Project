<?php
session_start();


$activeDriver = $_SESSION['main_driver'];
$driverId = $_SESSION['driver_id'];

require_once 'Task.php';

$driver = new Driver();

$driver->updateTask(['status' => 'active', 'id' => $driverId ]);

unset($_SESSION['main_driver']);

header('Location: ../drivers.php'); //redirect

