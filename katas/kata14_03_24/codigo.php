<?php 

static $num = 0;
$numtarg = 67;


echo"Introduce los números para llegar a lo solicitado del 1-9";

fscanf(STDIN, '%d\n', $num);

function frenarTren(){
if ($num == $numtarg){
    
    echo"has adivinado has frenado el tren!!";

}else  {
    $num = $num + $num;
}
}



?>