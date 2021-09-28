<?php
  
  // Comentario de uma linha
  # Outro Comentario
   /**
    * Comentario com várias linhas
    */

    // Comandos de Saída echo e Print
    echo "Curso de PHP Comando echo ";
    echo "</br>";
    print " Curso de PHP Comando Print ";

    // Tags PHP
    //<?php

    //<?

    // Variaveis
    $nome = "Everaldo"; // String
    $curso = "PHP 7/8"; // String
    $idade = 40;        // Inteiro
    $altura = 1.65;     // Float
    $peso = 66.8;       // Float
    $imc;               // Variavel sem atribuição
    $doador_de_orgos = true; // Boolean

    // vardump informações sobre as váriaveis
    echo "<br/>";
    var_dump($nome);
    echo "<br/>";
    var_dump($idade);
    echo "<br/>";
    var_dump($altura);
    echo "<br/>";
    var_dump($peso);

    
    // Escrever Valores da Variaveis
    echo "<p> Eu sou $nome, tenho $idade anos. </p>";
    echo "<p> Minha altura $altura e peso $peso kg </p>";

    // Criando Constantes no PHP
    define("TAXA", 0.5);
    define("JUROS", 0.01);

    // Escrever o valor de constantes
    echo "Taxa" . TAXA . "% <br>";
    echo "Juros" . JUROS . "% <br>";



?>