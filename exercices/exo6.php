<?php
$n =5;
$p=1;
for ($i=0; $i <=$n-1; $i++) { 
    $p*=$n-$i;
}
echo $p;
$nbr=5;
$fact=1;
for ($i=1; $i <=$nbr ; $i++) { 
    $fact=$fact*$i;
}
echo"le factoriel de $nbr est egale a:$fact";

if ($nbr < 0) {
    echo "Veuillez saisir un nombre superieur ou egale a 0";
}else{
    $f = 1;

    for ($i=$nbr; $i > 0 ; $i--) { 
        $f = $f * $i;
    }

    echo "<br>$nbr ! = $f";
}

