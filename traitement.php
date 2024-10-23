<?php 
echo "<pre>";

if (isset($_POST["ajouter"])) {
    # code...
    print_r($_POST);

    echo "Prenom:".$_POST["prenom"]."<br>";
    echo "Nom:".$_POST["nom"]."<br>";
    echo "Tel:".$_POST["tel"]."<br>";
}else{
    echo "Veuillez d'abord renseigner le formulaire";
}


echo "</pre>";
