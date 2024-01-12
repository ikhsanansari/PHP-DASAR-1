<?php

require_once('Animal.php');
require_once('Frog.php');
require_once('Ape.php');


$sheep = new Animal("Shaun");


echo "Name : " . $sheep->get_name();
echo "<br>";
echo "legs : " . $sheep->get_legs();
echo "<br>";
echo "cold blooded : " . $sheep->get_cold_blooded();
echo "<br>";
echo "<br>";
echo "<br>";

$kodok = new Frog("Buduk");


echo "Name : " . $kodok->get_name();
echo "<br>";
echo "legs : " . $kodok->get_legs();
echo "<br>";
echo "cold blooded : " . $kodok->get_cold_blooded();
echo "<br>";
$kodok->jump();

echo "<br>";
echo "<br>";
echo "<br>";

$sungokong = new Ape("Kera Sakti");

echo "Name : " . $sungokong->get_name() ;
echo "<br>";
echo "legs : " . $sungokong->get_legs();
echo "<br>";
echo "cold blooded : " . $sungokong->get_cold_blooded();
echo "<br>";
$sungokong->yell();

echo "<br>";
?>
