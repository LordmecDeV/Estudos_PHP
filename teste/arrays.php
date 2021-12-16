<?php
$array = array(40, 50, 60, 70, "johnny", true); //dentro de um array posso passar qualquer tipo de dado

//declaração flexivel
$array = array(
    40,
    50,
    60,
    70,
    "johnny",
    true
);


//cada elemento da sua matriz no array é gerido por um numero inteiro e assim que voce vai conseguir acessar determinado valor
echo $array[4]; // um array sempre inicia do 0, e para conseguir acessar o valor desejado deve levar isso em conta
//para acessar um elemento da matriz usamos []

//outra forma de declarar um array mais usada
$array1 = [
    40,
    60,
    35,
    "johnny"
];
//usando [] e não usando a palavara reservada array
$arraySobrenome = [
    "Almeida",
    "Felisbino",
    "Mexquita"
];

$arrayNome = [
    "johnny",
    "Julia",
    "Natacha"
];

echo $arraySobrenome[2] . ' ' . $arrayNome[2]; //concatenação de dois valrores dentro do array
