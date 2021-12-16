<?php
$array = [
    'johnny' => 40, //posso definir uma chave para acessar meu array, podendo ser qualquer tipo de valor
    35,        // se eu não determinar isso não tem problema, a propria linguagem vai fazer da forma convencional, iniciando o array do 0
    30,
    400 => 60
];
echo $array[0]; //usei a chave que criei no array para acessar o valor
