<?php

require 'MotorWay.php';
require 'PedestrianWay.php';
require 'ResidentialWay.php';
require 'Car.php';
require 'Truck.php';
require 'Bicycle.php';
require 'Skateboard.php';

$car2 = new Car('red',5,'fuel');
$camion = new Truck('black', 3, 'electric', 4);
$velo = new Bicycle('red',1);
$skate = new Skateboard('blue', 1);

$motorWay = new MotorWay();
$motorWay->addVehicle($car2);
$motorWay->addVehicle($camion);
$motorWay->addVehicle($velo);
$motorWay->addVehicle($skate);

$pedestrian = new PedestrianWay();
$pedestrian->addVehicle($car2);
$pedestrian->addVehicle($camion);
$pedestrian->addVehicle($velo);
$pedestrian->addVehicle($skate);

$residential = new ResidentialWay();
$residential->addVehicle($car2);
$residential->addVehicle($camion);
$residential->addVehicle($velo);
$residential->addVehicle($skate);

var_dump($motorWay);
var_dump($pedestrian);
var_dump($residential);
