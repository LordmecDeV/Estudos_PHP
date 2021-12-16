<?php

for ($i = 0; $i <= 10; $i++) {
    echo "piroca de tatu" . "<br>";
}

//percorrendo arrays com for 

$frutas = [
    'Uva',
    'Pera',
    'Limão',
    'Maçã',
    'Abacate'
];

for ($i = 0; $i < count($frutas); $i++) { // esta é uma forma de percorrer todos itens de um array com for
    echo $frutas[$i] . "<br>";
}
