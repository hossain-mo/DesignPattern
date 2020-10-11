<?php
require_once 'vendor/autoload.php';
use App\Creational\Builder\Car;
use App\Creational\Builder\MotoCycle;
use App\Creational\Builder\Director;
$director = new Director();
$carBuilder = new Car("Jeep");
$motoCycleBuilder = new MotoCycle("Rac");

//build car
$director->build($carBuilder);
$car = $carBuilder->getVehicle();
$car->show();


echo "\n\n\n\n";

//build motocycle
$director->build($motoCycleBuilder);
$motocycle = $motoCycleBuilder->getVehicle();
$motocycle->show();