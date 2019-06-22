<?php

include_once "Driver.php";

$driver = new Driver();

$drivers = $driver->getDrivers();

echo json_encode($drivers);