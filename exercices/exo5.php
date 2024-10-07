<?php 

$nombre = 5;

$somme = 0;

for ($i=1; $i < $nombre ; $i++) { 
    if ($nombre % $i == 0) {
        $somme += $i;
    }
}

if ($somme == $nombre) {
    echo "$nombre est un nombre parfait";
}else{
    echo "$nombre n'est pas un nombre parfait";
}