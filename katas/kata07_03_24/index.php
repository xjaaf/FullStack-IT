<?php

require_once 'Luchador.php';
require_once 'Pelea.php';

$luchador1 = new Luchador("Luchador 1", 10, 7, 8);
$luchador2 = new Luchador("Luchador 2", 5, 8, 4);

$lucha = new Pelea($luchador1, $luchador2);
$lucha->iniciarCombate();

