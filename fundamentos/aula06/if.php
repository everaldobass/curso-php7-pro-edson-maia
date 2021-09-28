<?php

// Estrutura de Controle


// Condicionais
$nota_final = 10;

if($nota_final >= 7){
    echo "<p> Aprovado <p/>";
} else if($nota_final < 5){
    echo "<p> Reprovado <p/>";
}else {
    echo "<p> Recuperação <p/>";
}

// If Ternário
$situacao = ($nota_final >= 7) ? "Aprovado": "Reprovado";
echo "<p> $situacao <p/>";

?>