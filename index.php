<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'MotorWay.php';

$carOne = new Car('blue', 4, 'fuel');
$carOne->getHasParkBrake();

try {
    echo $carOne->start();
} catch(Exception $e){
    $carOne->getHasParkBrake(false);
}finally{
    echo "Ma voiture roule comme un donut </br>";
}


$carTwo = new Car('white', 3, 'electric');
$carTwo->getHasParkBrake();

try {
    echo $carTwo->start();
} catch(Exception $e){
    $carTwo->getHasParkBrake(false);
}finally{
    echo "Ma voiture roule comme un donut ";
}
