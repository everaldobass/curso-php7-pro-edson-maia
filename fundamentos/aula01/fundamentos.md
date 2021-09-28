# Curso de PHP 7 Aula 00 Apresentação
- Professor Eson Maia
- Documentação - (https://www.php.net/manual/pt_BR/index.php)

### Curso de PHP 7 Aula 01 Baixar, instalar e configurar o PHP e Editor de Códigos
- VS Code (https://code.visualstudio.com/)

### Curso de PHP 7 Aula 02 Criar primeiro projeto em PHP
- Criando o primeiro projeto em PHP

### Curso de PHP 7 Aula 03 Variáveis, Constantes e Sintaxe básica
 - Comentários em PHP
 ```
// Comentario de uma linha
# Outro Comentario
/**
* Comentario com várias linhas
*/
```
 - Comandos de Saída echo e Print

```
echo "Curso de PHP Comando echo ";
echo "</br>";
print " Curso de PHP Comando Print ";
```

- Tags do PHP
```
 <?php

 <?
```

-  Variaveis
```
$nome = "Everaldo"; // String
$curso = "PHP 7/8"; // String
$idade = 40;        // Inteiro
$altura = 1.65;     // Float
$peso = 66.8;       // Float
$imc;               // Variavel sem atribuição
$doador_de_orgos = true // Boolean
 ```
- vardump informações sobre as váriaveis

```
var_dump($nome)
var_dump($idade)
var_dump($altura)
```

- Escrever Valores de variaveis
```
echo "<p> Eu sou $nome, tenho $idade anos. </p>";
echo "<p> Minha altura $altura e peso $peso kg </p>";
```

- Criando Constantes no PHP
```
define("TAXA", 0.5);
define("JUROS", 0.01);
```
- Definir o valor de constantes
```
define("TAXA", 0.5);
define("JUROS", 0.01);
    
```
- Mostrar em tela constantes
```
echo "Taxa" . TAXA . "% <br>";
echo "Juros" . JUROS . "% <br>";
    
```

### Curso de PHP 7 Aula 04 Operações e função number_format
 - Operador de   =   Atribuição
 - Operador de   +   Adição
 - Operador de   -   Subtrção
 - Operador de   *   Multiplicação
 - Operador de   /   Divisão
 - Operador de   %   Resto

 ### Curso de PHP 7 Aula 05 Arrays no PHP
- Criando um array 
- Criando um array vazio e inserindo elementos
- Escrever valores em um array 
- Adicionar Valores no Final de um Array
- Adicionar Valores no Inicio de um Array 
- Apagar valores no Final de um Array 
- Apagar valor no Inicio de um Array 
- Contar os elementos de um array 
- Ordenar um array Crescente 
- Ordenar um array decrescente

### Curso de PHP 7 Aula 06 Estruturas if else, switch case, for, foreach, while e do while
#### Estruturas de controle;
- Condicionais if....else, if...else if....eslse;
- Decisão switch... case;
#### Estruturas de repetição
- Para - for ;
- Para Nada - foreach;
- Enquanto - while;
- Faça - do While;

### Curso de PHP 7 Aula 07 GET e POST no PHP
- Criar o index.html;
- Métodos GET e POST;
- Correto trabalhar com o método POST;

### Curso de PHP 7 Aula 08 Validações de formulários no PHP
- Validações 
- Sanitizar - limpeza dos campos
- Exibir os dados cadastrados
- Filtros Validate apos Sanitizar


### Curso de PHP 7 Aula 09 Include e Require no PHP
- Include -  só produzirá um aviso (E_WARNING) e o script continuará;
- Include_once ;
- Require -  irá produzir um erro fatal (E_COMPILE_ERROR) e parar o script;
- Require_once - Melhor forma de utilizar;

### Curso de PHP 7 Aula 10 Criar funções no PHP
- Funçoes;
- Funções sem parametros;
- Funções com parametros e sem retorno;
- Funcções com paramentros e com retorno;
- Tipos de dados das variaveis;

### Curso de PHP 7 Aula 11 Como fazer upload de arquivo no PHP
- Upload de arquivo - jpg, png, jpeg, gif;
- Ver array de tipos a extensao do arquivo;
- Definindo novo nome;
- Fazer upload do arquivo;
```
 enctype="multipart/

```

### Curso de PHP 7 Aula 12 Upload múltiplo de arquivos no PHP
- Upload de varios arquivos
- No arquivo html acrescenta - arquivo[], multiple;
- Variavel para receber os arquivos
- Contador para controlar envio dos arquivos

### Curso de PHP 7 Aula 13 Sessões no PHP
- Start - Inicia uma nova sessão ou resume uma sessão existente
- Unset - Libera todas as variáveis de sessão
- Destroy -  Destrói todos os dados registrados em uma sessão

### Curso de PHP 7 Aula 14 Login no PHP
- Criando Login no PHP
- Verificar se o email e senha estão corretos
- Iniciar a sessão
- Capturar o e-mail
- Verficar os dados do formulario
- Direcionar para a página 

### Curso de PHP 7 Aula 15 Criptografia, codificação e hash
- Base64 - Codifica - decodifica - Não Recomendavel.
- MD5 - Codifica.
- Sha1 - Codifica.
- Password Hash - Recomendavel.


