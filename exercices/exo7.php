<?php 

$nbre = 21;

for ($i=1; $i < $nbre; $i++) { 
    
    $cpt = 0;
    for ($j=1; $j <= $i; $j++) { 
        if ($i % $j == 0) {
            $cpt++;
        }
    }

    if ($cpt == 2 || $i == 1) {
        echo "$i - ";
    }
}