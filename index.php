<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'MotorWay.php';

$carOne = new Car('blue', 4, 'fuel');
$carOne->getHasParkBrake();

$carTwo = new Car('white', 3, 'electric');
$carTwo->getHasParkBrake();

$carOne->setParkBrake(true);
$carOne->start();
echo '<br>';

$carTwo->setParkBrake(false);
$carTwo->start();
echo "<pre>";
