<?php

// Operações PHP

/**
 
 = Atribuição
 + Adição
 - Subtrção
 * Multiplicação
 / Divisão
 % Resto

 */

 // Adição
 $nota1 = 7.0;
 $nota2 = 5.0;
 $notafinal = $nota1 + $nota2;
 $nota_formatado = number_format($notafinal, 2, ',','.');
 echo "<p> Resultado final da nota1 mais a nota2: $nota_formatado </p>";

// Subtração
$valor_pago = 100.0;
$valor_compra = 75.0;
$troco        = $valor_pago - $valor_compra;
$troco_formatado = number_format($troco, 2, ',','.');
echo  "<p> Valor pago menos o valor da compra: $troco_formatado </p>";


// Multiplicação
$preco = 10.0;
$quantidade = 100;
$preco_total = $preco * $quantidade;
$preco_formatado = number_format($preco_total, 2, ',','.');
echo  "<p> Valor vezes quantidade final: $preco_formatado </p>";

// Divisao
$valor_compra = 2000.00;
$qtd_itens = 20;
$total_div = $valor_compra / $qtd_itens;
$total_formatado = number_format($total_div, 2, ',','.');
echo  "<p> Divisão da Compra: $total_formatado </p>";


// Resto
$dividendo = 11;
$divisor = 2;
$resto = $dividendo % $divisor;
$resto_formatado = number_format($resto, 2, ',','.');
echo "<p> Resto da divisão: $resto_formatado </p>";

?>