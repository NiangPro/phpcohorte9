<?php 

$tel = "705849434";
// contenir uniquement des chiffres 
if (ctype_digit($tel)) {
    // taille doit etre egale a 9
    if (strlen($tel) == 9) {
        // commencer par 70, 75, 76, 77, 78, 33 et 88
        if (str_starts_with($tel, "70") || str_starts_with($tel, "75") || str_starts_with($tel, "76") || str_starts_with($tel, "77") || str_starts_with($tel, "78") || str_starts_with($tel, "33") || str_starts_with($tel, "88")) {
            echo "$tel est valide";
        }else{
            echo "Le numero doit commencer par 70, 75, 76, 77, 78, 33 ou 88";
        }
    }else{
        echo "Le numero doit comporter 9 chiffres";
    }
}else{
    echo "Le numero doit contenir uniquement des chiffres";
}



