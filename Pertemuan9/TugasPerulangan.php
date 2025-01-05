<?php

$max = 50;

for ($i = 2; $i <= $max; $i++) {
    $isPrime = true; 

    for ($j = 2; $j <= sqrt($i); $j++) {
        if ($i % $j == 0) {
            $isPrime = false; 
            break;
        }
    }

    if ($isPrime) {
        echo $i . " ";
    }
}
?>
