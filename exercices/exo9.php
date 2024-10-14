<?php 

function table_de_multiplication($nombre){
    echo "Table de multiplication de $nombre <br>";
    for ($i=1; $i <= 10 ; $i++) { 
        echo "$nombre x $i = ".($nombre * $i)."<br>";
    }
}

function equation_du_second_degre($a, $b, $c){

    echo "$a x<sup>2</sup> + ($b)x +($c) = 0 <br>";
    $delta = $b*$b -4*$a*$c;

    if ($delta < 0) {
        echo "L'equation n'admet pas de solution  par ce que Delta = $delta<br>";
    }elseif($delta == 0){
        $x0 = -$b/($a*2);

        echo "S={$x0}  par ce que Delta = $delta<br>";
    }else{
        $x1 = (-$b - sqrt($delta))/($a*2);
        $x2 = (-$b + sqrt($delta))/($a*2);

        echo "S={ ".$x1.", ".$x2."} par ce que Delta = $delta<br>";

    }

}

table_de_multiplication(9);

equation_du_second_degre(1, 4, 4);
equation_du_second_degre(2, 8, 4);
equation_du_second_degre(8, 3, 4);