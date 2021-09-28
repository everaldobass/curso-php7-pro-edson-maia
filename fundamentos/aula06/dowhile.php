<?php

$carros = ["Ferrari", "BMW", "Audi", "Lanborguing", "Posch", "Bugatti"];
$quant = count($carros);

// Do While

$cont = 0;

do {

    echo"<p> $carros[$cont] <p/>";
    # code...
    $cont ++;// Incremento

} while ($cont < $quant);

?>