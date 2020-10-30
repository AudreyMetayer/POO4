<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'MotorWay.php';


$truck = new Truck('black', 3, 'diesel', 850);
echo $truck->fullLoad();

$truck->setLoad(250);
echo $truck->getLoad();
echo $truck->fullLoad();


$highRoad = new MotorWay();
$highRoad->addVehicle($truck);
echo '<pre>';
var_dump($highRoad);

