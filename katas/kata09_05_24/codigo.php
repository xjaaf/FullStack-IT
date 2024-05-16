<?php 

for ($i= 1; $i <=10; $i++){
    echo $i . PHP_EOL;
}

$i = 1;
do {
    echo $i . PHP_EOL;
    $i++;
} while ($i <= 10); 

$i = 1;
while ($i <= 10){
    echo $i . PHP_EOL;
    $i++;
}
 
function printNumbers($start, $end){
    for ($i = $start; $i <= $end; $i++){
        echo $i . PHP_EOL;
    }
}

printNumbers(1, 10);


?>