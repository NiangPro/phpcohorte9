<?php 

$mot = "JE suis une chaine de caracteres";


$nm = strtolower($mot);
$nbvoyelle = 0;
// on va parcourir caractere par caractere 
for ($i=0; $i < strlen($mot) ; $i++) { 
    if ($nm[$i] == "a" || $nm[$i] == "e" || $nm[$i] == "o" || $nm[$i] == "i" || $nm[$i] == "u" || $nm[$i] == "y") {
        $nbvoyelle++;
    }
}

echo "<q>$mot</q> comporte $nbvoyelle voyelle(s)";