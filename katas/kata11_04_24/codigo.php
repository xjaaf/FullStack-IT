<?php
function sumaDigit($numero)
{
    $numero_str = (string)$numero;
    $longitud = strlen($numero_str);
    $suma = 0;

    for ($i = 0; $i < $longitud; $i++) {
        $digito = (int)$numero_str[$i];
        $suma += $digito;
    }
    if ($suma >= 10) {
        $suma = sumaDigit($suma);
    }
    return $suma;
}
function interpResultado($suma)
{
    switch ($suma) {
        case 0:
            return "El todo.";
        case 1:
            return "Individualidad.";
        case 2:
            return "Dualidad.";
        case 3:
            return "Razón.";
        case 4:
            return "Estabilidad.";
        case 5:
            return "Amor.";
        case 6:
            return "Destrucción.";
        case 7:
            return "Sabiduría.";
        case 8:
            return "Poder.";
        case 9:
            return "Generosidad.";
        default:
            return "Número fuera del rango válido.";
    }
}

$numero = 53;

$suma = sumaDigit($numero);
$resultado = interpResultado($suma);
echo $resultado;
