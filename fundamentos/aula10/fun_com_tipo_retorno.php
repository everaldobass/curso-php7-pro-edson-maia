<?php

// Funcções com paramentros e com retorno
function somarDoisNumeros(float $n1, float $n2) : float
{
    
    return $n1 + $n2;
}

$resultado = somarDoisNumeros(5, 10);
echo "<p> Resultado da Soma:  $resultado </p>";