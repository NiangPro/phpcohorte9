<?php 

echo "<pre>";
$entiers = array(45, 56, 0, -5, 89);


$nbreImpairs = array_filter($entiers, function ($valeur){
    return $valeur % 2 != 0 && $valeur > 0;
});

rsort($nbreImpairs);

print_r($nbreImpairs);


echo "</pre>";
