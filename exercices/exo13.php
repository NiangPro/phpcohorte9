<?php 

$tableau = [23, -5, 20, 8,-8, 6, 30];


for ($i=0; $i < count($tableau); $i++) { 
    if ($tableau[$i] > 0 && $tableau[$i] % 2 == 0) {
        echo "$tableau[$i] - ";
    }
}

$nbrePairs =  array_filter($tableau, function ($n){
    return $n % 2 == 0 && $n > 0;
});

print_r($nbrePairs);