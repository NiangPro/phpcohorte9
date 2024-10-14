<?php 

$mot = "Matam";

if (strcmp(strtolower($mot), strtolower(strrev($mot))) == 0) {
    echo "$mot est palyndrome";
}else{
    echo "$mot n'est pas palyndrome";
}
