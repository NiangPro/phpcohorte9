<?php 

$age = 30;

if ($age < 0) {
    echo "Age incorrect";
}elseif ($age < 18) {
    echo "Vous etes mineur";
}else{
    echo  "Vous etes majeur";
}