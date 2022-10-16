<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

//---------- Bicycle --------
$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
echo $bicycle->brake();
var_dump($bicycle);

//----------Car----------
$car = new Car('green', 4, 'electric');
echo $car->forward();
echo $car->brake();
var_dump($car);

//---------Truck---------
$truck = new Truck('black', 2);
echo $truck->setLoading();
echo $truck->getLoading();
echo $truck->forward();
echo $truck->brake();
var_dump($truck);


