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

// supprimer le premier element 
array_shift($tab);

// supprimer le dernier element 
array_pop($tab);

// ajouter , modifier ou supprimer un element specifique du tableau 
array_splice($tab, 2, 0, "valeur ajoutee");
array_splice($tab, 5, 1, "valeur modifiee");
array_splice($tab, 3, 2);


print_r($tab);

echo "<br> Avant tri <br>";
print_r($entiers);
// trier en ordre croissant 
sort($entiers);
echo "<br> Apres tri croissant <br>";

print_r($entiers);

rsort($entiers);
echo "<br> Apres tri decroissant <br>";

print_r($entiers);

echo "<br> Tableau inverse <br>";

$entiers = array_reverse($entiers);
print_r($entiers);


echo "</pre>";
