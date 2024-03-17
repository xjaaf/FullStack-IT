<?php 
require_once 'Tigger.php';

$tigger1 = Tigger::getInstance();
$tigger1->roar();

$tigger2 = Tigger::getInstance();
$tigger2->roar(); 

echo "Tigger rugió " . $tigger1->getCounter() . " veces." . PHP_EOL;
?>