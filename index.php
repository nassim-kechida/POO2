<?php

require_once 'Bicycle.php';
require_once 'Cars.php';
require_once 'Truck.php';


$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Cars('yellow', 4, 'electric');
echo $car->forward();
var_dump($car);


$truck = new truck ('black',3,'diesel',100);
var_dump($truck);
echo $truck->forward();
echo '<br> capacité du camion' . $truck->getCapacity() .'tonne' .'<br>';
echo '<br> chargement du camion' . $truck->getLoading() . 'tonne' .'<br>';
echo $truck->loading();
echo '<br> chargement : ' . $truck->getLoading() . 'tonne' . '<br>';
echo $truck->loading();