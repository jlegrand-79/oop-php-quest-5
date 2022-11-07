<?php
require_once 'Bike.php';

$bicycle = new Bike('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

require_once 'Car.php';
$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);

var_dump($car->switchOn());
echo 'Les phares sont allumés.';
var_dump($car->switchOff());
echo "Les phares sont éteints.";

var_dump($bicycle->switchOn());
echo "La dynamo alimente l'éclairage.";
$bicycle->setCurrentSpeed(9);
echo nl2br(PHP_EOL);
echo "Le vélo passe à 9 km/h.";
var_dump($bicycle->switchOn());
echo "La dynamo n'alimente plus l'éclairage.";

var_dump($bicycle->switchOff());
echo "L'éclairage du vélo est éteint.";

?>
