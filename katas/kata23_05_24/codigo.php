<?php

function esNumeroValido(string $n): bool {
    return is_numeric($n) && $n >= 0; 
}

function calcularYGuardar(string $n) {
    if (!esNumeroValido($n)) {
        echo "Introduzca un número válido.\n";
        return;
    }

    $cuadrado = $n * $n;
    $cubo = $n * $n * $n;
    $factorial = calcularFactorial($n);

    $contenidoArchivo = "Número: $n\nCuadrado: $cuadrado\nCubo: $cubo\nFactorial: $factorial\n";

    $nombreArchivo = "cálculo_$n.txt";

    $archivo = fopen($nombreArchivo, 'w');
    fwrite($archivo, $contenidoArchivo);
    fclose($archivo);

    echo "Cálculos guardados $nombreArchivo\n";
}

function calcularFactorial(int $n): int {
    $factorial = 1;
    for ($i = 1; $i <= $n; $i++) {
        $factorial *= $i;
    }
    return $factorial;
}

$n = readline("Introduzca un número: ");

calcularYGuardar($n);
