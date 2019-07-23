<?php
require_once '.\vendor\autoload.php';

use src\Human;
use src\Driver;
use src\Car;
use src\Truck;
use src\MotorCycle;
use src\Bicycle;

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


echo "<h1>" . "Dev-Pro.net" . "</h1>";
echo "<h3>" . "ТЗ.№ 1  " . "</h3>";
echo "<h3>" . "Интерфейсы и классы." . "</h3>";

$human = new Human();
$human->setName('Avatar');
echo $human->left();
echo $human->right();


$driver = new Driver();
$driver->setName('Master');
echo $driver->forward();
echo $driver->right();


$car = new Car();
$car->setDriver($driver);
$car->setPassenger($human);
echo $car->backward();

$truck = new Truck();
$truck->setDriver($driver);
echo $truck->left();
echo $truck->left();

$motorCycles = new MotorCycle();
$motorCycles->setDriver($driver);
$motorCycles->setPassenger($human);
echo $motorCycles->up();

$bicycle = new Bicycle();
$bicycle->setDriver($driver);
echo $bicycle->up();
echo $bicycle->up();
echo $bicycle->up();






