<?php

require_once 'Car.php';
require_once 'Bicycle.php';

$car = new Car("blue", 2, "SP 98");
var_dump($car);

echo "J'suis à la pompe !";
echo "<br> J'ai " . $car->getGasLeft() . "L dans mon char tabarnak !";
echo "<br>" . "J'mets du carburant !";
$car->setGasLeft(100);
echo "<br> J'ai " . $car->getGasLeft() . "L dans mon char tabarnak !";
echo "<br>" . "Yeah !";
echo "<br>" . $car->start();
echo "<br>" . $car->forward();

$bike = new Bicycle();
var_dump($car);





// $bike->setColor("blue");
// $bike->setCurrentSpeed(0);
// var_dump($bike);

// echo $bike->forward();

// echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
// echo $bike->brake();
// echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
// echo $bike->brake();

// var_dump($bike);
// $bike->dump();