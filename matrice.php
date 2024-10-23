<?php 


$matrice = [
    ["Ba", "Diop", 35],
    [40, "dia", "Jaune"],
    ["Bien", "html", "css"]
];

echo $matrice[0][0];

for ($ligne=0; $ligne < count($matrice) ; $ligne++) { 
    for ($colonne=0; $colonne < count($matrice[$ligne]); $colonne++) { 
        echo $matrice[$ligne][$colonne]."  ";
    }
}