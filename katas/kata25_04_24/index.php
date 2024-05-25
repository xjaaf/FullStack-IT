<?php 
require_once('class/Player.php');
require_once('class/Warrior.php');
require_once('class/Archer.php');
require_once('class/Mage.php');

$warrior = new Warrior("Alistair", "Sword of Justice");

$warrior->attack();
$warrior->run('RIGHT'); 

$mage = new Mage("Elena");
$mage->addSpell("Lightning Bolt");
$mage->useSpell("Lightning Bolt");

$archer = new Archer("Sylvia", "Eagle's Eye", 5); 
$archer->shoot(); 

echo "Warrior's position: " . $warrior->getPosition() . "\n";
echo "Mage's position: " . $mage->getPosition() . "\n";
echo "Archer's position: " . $archer->getPosition() . "\n";