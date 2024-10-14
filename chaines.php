<?php 

$chaine = "  ma chaine de caracteres  ";

// supprimer l'espace en debut et en fin de mot 
$chaine = trim($chaine);

echo "Taille : ".strlen($chaine)."<br>";

echo "Dernier caractere : ".$chaine[strlen($chaine) - 1]."<br>";

echo "Premier caractere : ".$chaine[0]."<br>";
echo "Capital : ".ucfirst($chaine)."<br>";
echo "Majuscule : ".strtoupper($chaine)."<br>";
echo "Minuscule : ".strtolower($chaine)."<br>";
echo "Commencement mot en majuscule : ".ucwords($chaine)."<br>";
echo "Chaine inversee : ".strrev($chaine)."<br>";
echo "Extraire une sous chaine : ".substr($chaine, 0, 9)."<br>";
echo "Le nombre de mots de la chaine : ".str_word_count($chaine)."<br>";



// if (ctype_alpha($chaine)) {
if (ctype_digit($chaine)) {
    echo "vrai";
}else{
    echo "faux";
}