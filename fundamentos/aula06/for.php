<?php

// Repetição
$nomes = ["Everaldo", "Edson", "Elias", "Eriberto", "Everonica", "Henrique"];
$quant = count($nomes);

// For
echo "<h1> Nomes dos usuários </h1>";
for ($i = 0; $i < $quant; $i ++){

    echo "<p> $nomes[$i] </p>";

}



?>