<?php

function esMatrizMagica($matriz) {
    $tamaño = count($matriz);
    $suma_magica = array_sum($matriz[0]);

    
    foreach ($matriz as $fila) {
        if (array_sum($fila) != $suma_magica) {
            return "No es mágica!";
        }
    }

    for ($i = 0; $i < $tamaño; $i++) {
        $suma_columna = 0;
        for ($j = 0; $j < $tamaño; $j++) {
            $suma_columna += $matriz[$j][$i];
        }
        if ($suma_columna != $suma_magica) {
            return "No es mágica!";
        }
    }

    $suma_diagonal = 0;
    for ($i = 0; $i < $tamaño; $i++) {
        $suma_diagonal += $matriz[$i][$i];
    }
    if ($suma_diagonal != $suma_magica) {
        return "No es una matriz mágica!";
    }

    $suma_diagonal_secundaria = 0;
    for ($i = 0; $i < $tamaño; $i++) {
        $suma_diagonal_secundaria += $matriz[$i][$tamaño - 1 - $i];
    }
    if ($suma_diagonal_secundaria != $suma_magica) {
        return "No es una matriz mágica!";
    }

    return "Es una matriz mágica!";
}

$matriz1 = [[2, 7, 6], [9, 5, 1], [4, 3, 8]];
$matriz2 = [[3, 7, 6], [9, 5, 1], [4, 3, 8]];

echo esMatrizMagica($matriz1) . "\n";
echo esMatrizMagica($matriz2) . "\n";

