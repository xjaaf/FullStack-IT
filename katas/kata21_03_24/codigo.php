<?php
function esNumeroArmstrong($numero)
{

    $numero_str = (string)$numero;

    $longitud = strlen($numero_str);


    $suma = 0;


    for ($i = 0; $i < $longitud; $i++) {

        $digito = (int)$numero_str[$i];

        $suma += pow($digito, $longitud);
    }


    if ($suma == $numero) {
        return true;
    } else {
        return false;
    }
}


$numero = "153";
if (esNumeroArmstrong($numero)) {
    echo "$numero es Armstrong.";
} else {
    echo "$numero no es Armstrong.";
}
