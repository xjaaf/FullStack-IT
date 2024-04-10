<?php

function verificarFreno($digits, $objetivo) {
    $suma = array_sum($digits);
    return $suma == $objetivo;
}

function activarFreno($objetivo) {
    $suma_parcial = 0;
    $digits = [];

    echo "Ingrese los 10 dígitos para frenar:\n";
    for ($i = 0; $i < 10; $i++) {
        echo "Ingrese el dígito " . ($i + 1) . ": ";
        $digit = intval(trim(fgets(STDIN)));
        $digits[] = $digit;
        $suma_parcial += $digit;
        echo "Suma parcial: $suma_parcial\n";
    }

    if (verificarFreno($digits, $objetivo)) {
        echo "¡Freno activado!\n";
    } else {
        echo "La suma total de los dígitos no correcta.\n";
    }
}

// Función para activar el segundo freno
function activarSegundoFreno($objetivo) {
    echo "Ingrese los 10 dígitos para desbloquear el freno:\n";
    $suma = 0;
    for ($i = 0; $i < 10; $i++) {
        echo "Ingrese el dígito " . ($i + 1) . ": ";
        $digit = intval(trim(fgets(STDIN)));
        $suma += $digit;
    }

    if ($suma == $objetivo) {
        echo "¡Segundo freno activado!\n";
    } else {
        echo "La suma total de los dígitos no correcta.\n";
    }
}


$objetivo_freno1 = 67;

$objetivo_freno2 = 180; 

activarFreno($objetivo_freno1);

activarSegundoFreno($objetivo_freno2);
?>
