<?php 

$nbre = 7;
$cpt = 0;
$somme = 0;
for ($i=1; $i < $nbre; $i++) { 
    if ($nbre % $i == 0) {
        $somme += $i;
        $cpt++;
    }
}

if ($cpt == 1 || $nbre == 1) {
    echo "$nbre est un nombre premier<br>";
}else{
    echo "$nbre n'est pas un nombre premier<br>";
}

if ($somme == $nbre) {
    echo "$nbre est un nombre parfait<br>";
}else{
    echo "$nbre n'est pas un nombre parfait<br>";
}

echo "La table de multiplication de $nbre est <br>";
for ($i=1; $i <= 10; $i++) { 
    echo "$nbre x $i = ".($nbre*$i)."<br>";
}