<?php 

echo "<pre>";
$tab = ["amina", 45, true, 4.8, "Diallo"];

$entiers = array(45, 56, 0, -5, 89);

print_r($tab);

echo "Taille du table = ".count($tab)."<br>";
echo "Premier element = ".$tab[0]."<br>";
echo "Dernier element = ".$tab[count($tab) - 1]."<br>";

// ajouter en derniere position 
$tab[] = "Thiam";
array_push($tab, "Ndiaye");

// ajouter en premiere position 
array_unshift($tab, "Adiouma");

// modifier un element du tableau 
$tab[4] = "Nouveau element";


print_r($tab);


echo "</pre>";
