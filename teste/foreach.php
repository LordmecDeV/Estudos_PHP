<?php

//estrutura de repetição ideal para percorrer arrays
$barcelusa = [
    'Johnny',
    'Nicholas',
    'Matheus',
    'Gabriel',
    'Robinho',
    'Perikles',
    'Marcelinho'
];

foreach ($barcelusa as $barca) { //foreach significa "para cada" item do meu array seja como barca, cada vez que ele passar pelo meu array, ele vai atribuir um item do meu array a variavel $barca, por se tratar de uma estrutura de repetição, ate ter percorrido toddo meu array
    echo $barca . "<br>";
}
