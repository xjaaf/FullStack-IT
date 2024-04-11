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
   var_dump($suma);
    if ($suma >= 10) {
        $suma = sumaDigit($suma);
    } else {
        switch ($suma) {

            case 0:
                echo "El todo.";
                break;
            case 1:
                echo "Individualidad.";
                break;
            case 2:
                echo "Dualidad.";
                break;
            case 3:
                echo "Razón.";
                break;
            case 4:
                return "Estabilidad.";
                break;
            case 5:
                return "Amor.";
                break;
            case 6:
                return "Destrucción.";
                break;
            case 7:
                return "Sabiduría.";
                break;
            case 8:
                return "Poder.";
                break;
            case 9:
                return "Generosidad.";
                break;
        }
    }
}

$numero = 0;

$resultado = sumaDigit($numero);
echo $resultado;
