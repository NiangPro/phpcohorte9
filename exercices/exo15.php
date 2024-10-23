<?php 

$mat = [
    [56, 9,-23, 230],
    [5, 9,-3, 23],
    [10, -5,3, 30],
    [15, 9,-23, 40]
];

// on parcours la matrice 
for ($i=0; $i <count($mat) ; $i++) { 
    // on trie chaque ligne 
    rsort($mat[$i]);
    array_pop($mat[$i]);
}

// on affiche
echo "Affichage avec la boucle for <br>";
for ($i=0; $i < count($mat); $i++) { 
    for ($j=0; $j < count($mat[$i]) ; $j++) { 
        echo $mat[$i][$j]." - ";
    }
    echo "<br>";
}

echo "Affichage avec la boucle foreach <br>";

foreach($mat as $i => $tableau){
    foreach($tableau as $j => $valeur){
        echo "mat[$i][$j] = ".$valeur." ";
    }
    echo "<br>";
}

