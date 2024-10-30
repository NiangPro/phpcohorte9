<?php 

 if (isset($_POST["register"])) {
    extract($_POST);

    header("Location:profil.php?prenom=$prenom&nom=$nom&tel=$tel&email=$email");
 }