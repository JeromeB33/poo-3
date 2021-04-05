<?php

// index.php

require_once 'Vehicle.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$pickUp = new Car('red', 4);
$vtt = new Bike('yellow', 2);
$cross = new Bike('green', 1);
$skate = new Skateboard('Brown', 0);

$motorWay = new MotorWay();
$pedestrianWay = new PedestrianWay();
$residentialWay = new ResidentialWay();

echo 'on essaye d\'inserer un Car dans MotorWay :<br>';
$motorWay->addVehicle($pickUp);
var_dump($motorWay->getCurrentVehicle());
echo '<br>';

echo 'on essaye d\'inserer un Bike dans PedestrianWay :<br>';
$pedestrianWay->addVehicle($vtt);
var_dump($pedestrianWay->getCurrentVehicle());
echo '<br>';

echo 'on essaye d\'inserer un Bike dans PedestrianWay :<br>';
$pedestrianWay->addVehicle($cross);
var_dump($pedestrianWay->getCurrentVehicle());
echo '<br>';

echo 'on essaye d\'inserer un Car PedestrianWay :<br>';
$pedestrianWay->addVehicle($pickUp);
var_dump($pedestrianWay->getCurrentVehicle());
echo '<br>';

echo 'on essaye d\'inserer un Skateboard dans ResidentialWay :<br>';
$residentialWay->addVehicle($skate);
var_dump($residentialWay->getCurrentVehicle());
echo '<br>';
