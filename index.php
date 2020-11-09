<?php
require_once 'LightableInterface.php';
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'MotorWay.php';
require_once 'Speedometer.php';


$carOne = new Car('blue', 4, 'fuel');
$carOne->getHasParkBrake();
$carOne->setHasParkBrake(true);
$carOne->start();
echo '<br>';


$carTwo = new Car('white', 3, 'electric');
$carTwo->getHasParkBrake();
$carTwo->setHasParkBrake(false);
$carTwo->start();
echo '<br>';

echo Speedometer::convertKmToMile(10);
echo '</br>';

$bike = new Bicycle('red', 1);
$bike->setCurrentSpeed(1);
echo '<pre>';
var_dump($bike->switchOn());
