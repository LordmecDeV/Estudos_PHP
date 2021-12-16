<?php
//o comando print pode receber apenas um valor como parametro para ser executado, tendo a mesma função do echo que é imprimir algo na tela

$nome = " johnny";
$nome_2 = 'vai corinthians';

print $nome . "<br>";
echo 'o corinthians tem o $nome' . "<br>"; //usando aspas simples o valor atribuido a variavel $nome não sera impresso e sim $nome
echo "o corinthians tem o $nome" . "<br>"; //já com aspas duplas o valor da variavel sera reconhecido e lido

// Outra forma de utilizar uma string é o Heredoc, o valor da variavel sera reconhecido assim como em aspas duplas
echo <<<EOF
o corinthians tem o $nome
EOF; //identificador

// a outra forma de também utilizar uma string é o Nowdoc que tem o funcionamento parecido com o heredoc
echo <<<'EOF'
o corinthians tem o $nome
EOF; // a variavel não tera seu valor impresso, e o identificador no inicio contem aspas simples

$troca_caracter = $nome[1];
// modificação da string da varivel $nome
$nome[1] = 'h';
echo $nome . "<br>";
//acessei o valor [1] da variavel $nome, que no caso vai ser a letra O, atribui a ela o H, e quando impresso foi feita a troca, manipulamos uma string

/* Funções	Característica
strlen()	    Retorna o tamanho de uma string
ucwords	        Converte para maiúsculo o primeiro caractere de cada palavra
ucfirst	        Converte para maiúsculo o primeiro caractere da string
trim	        Retira o espaço no início e final de uma string
substr	        Retorna uma parte de uma string
str_replace	    Substitui um texto dentro de uma string
substr_replace	Substitui um texto dentro de uma parte de uma string
strtoupper	    Converte uma string para maiúscula
strtolower	    Converte uma string para minúscula
*/

//será impressa a quantidade de caracteres da string (13)
echo strlen($nome) . "<br>";

//Converte o primeiro caractere de cada palavra para maiúsculo
echo ucwords($nome) . "<br>";

//Converte o primeiro caractere para maiúsculo
echo ucfirst($nome) . "<br>";

//Converte a string para minúscula
echo strtolower($nome) . "<br>";

//Converte a string para maiúscula
echo strtoupper($nome) . "<br>";

//Substitui a string Linguagem pela string Amo
echo str_replace('Linguagem', 'Amo', $nome) . "<br>";

//Insere na primeira posição da string os caracteres PHP
echo substr_replace($nome, 'PHP', 0, 0) . "<br>";

//Será retornada parte da string
echo substr($nome, 1, 5) . "<br>";

//Retira o espaço no início e no final de uma string
echo trim($nome_2) . "<br>";

//convertendo valores para string

$var = 15;
$var_2 = strval($var); //convertemos o valor inteiro da variavel var para uma string com a função strval

/*
booleano para string
TRUE: é convertido para a string "1".
FALSE: é convertido para "" (uma string vazia).
*/
$var3 = true;
$var4 = false;

$var5 = strval($var3);
echo $var5 . "<br>";
