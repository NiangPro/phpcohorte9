<?php 

$nombre = 4;

$compteur = 0;

for ($i=1; $i <= $nombre ; $i++) { 
    if ($nombre % $i == 0) {
        $compteur++;
    }
}

if ($compteur == 2 || $nombre == 1) {
    echo "$nombre est un nombre premier";
}else{
    echo "$nombre n'est pas un nombre premier";
}