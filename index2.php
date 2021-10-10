<?php

require_once 'Bicycle2.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward(). '<br>';
echo $bicycle->brake();
echo '<br> Vitesse du vélo : ' . $bicycle->setCurrentSpeed(0). 0 .' km/h' . '<br>';
// var_dump($bicycle);

require_once 'Car2.php';

$car = new Car('green', 4, 'electric');
echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->setCurrentSpeed(0) . 120 .' km/h' . '<br>';
echo $car->brake() . '<br>';
// var_dump($car);


require_once 'Truck.php';

$truck = new Truck('red', 2, 'fuel', 0);
echo $truck->forward();
echo '<br> Vitesse du camion : ' . $truck->setCurrentSpeed(0) . 70 .' km/h' . '<br>';
echo $truck->brake() . '<br>';
echo $truck->load() . '<br>';
// var_dump($truck);



