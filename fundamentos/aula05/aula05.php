<?php
// Array
/**
 * Vetores ou matrizes são variaveis;
 * multidimensionais;
 * São linhas com várias colunas
 */

 // Criando Arrays
 echo "<h2> Criando um array </h2>";
 $alunos = array("Everaldo", "Edson", "Elias", "Eduardo");
 $cursos = ["PHP", "JavaScript", "HTML5", "CSS3"];
 $ficha = [10, "Nome", 40, 1.70, true];

 $bebidas = [
     "Sucos" => ["Manga", "Uva", "Laranja"],
     "Refri" => ["Cola", "Guaraná", "Fanta"],
 ];

 // Array Vazio
 echo "<h2> Criando um array vazio e inserindo elementos </h2>";
 $categorias = [];
 $categorias[0] = "Developer";
 $categorias[1] = "Front-End";
 $categorias[2] = "Back-end";

 echo "<pre>";
 print_r($alunos);
 echo"<hr/>";
 print_r($cursos);
 echo"<hr/>";
 print_r($ficha);
 echo"<hr/>";
 echo"<br/>";
 print_r($categorias);
 // Função Var Dump
 var_dump($categorias);
 echo "</pre>";

 // Escrever valores do array
 echo "<h2> Escrever valores em um array </h2>";
 echo "$alunos[0] <br/>";
 echo $bebidas["Refri"][1];

 // Funçõs para Array

 // Adicionar valores no final de um array
 echo "<h2> Adicionar Valores no Final de um Array </h2>";
 array_push($cursos, "Java", "Python");
 print_r($cursos);


 // Adicionar um valor no incio do array
 echo "<h2> Adicionar Valores no Inicio de um Array </h2>";
 array_unshift($alunos, "Henrique", "Eriberto");
 print_r($alunos);


 // Apagar valor no final de um array
 echo "<h2> Apagar valores no Final de um Array </h2>";
 array_pop($alunos);
 print_r($alunos);

 echo "<h2> Apagar valor no Inicio de um Array </h2>";
 array_shift($alunos);
 print_r($alunos);


 // Contar e ordenar elementos do array
 echo "<h2> Contar os elementos de um array </h2>";
$quantidade_elementos = count($alunos);
echo "<p>Quantidades de Alunos:  $quantidade_elementos </p>";


// Ordenar crescente os dados de um arry
echo "<h2> Ordenar Crescente </h2>";
sort($alunos);
print_r($alunos);


// Ordenar decrescente os dados de um arry
echo "<h2> Ordenar decrescente </h2>";
rsort($alunos);
print_r($alunos);


?>