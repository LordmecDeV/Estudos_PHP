<?php
/* || -> E
or -> ou
! -> not
*/
$media = 7;
$frequencia = 75;

$media_aluno = 8;
$frequencia_aluno = 50;

/*if ($media_aluno >= $media && $frequencia_aluno >= $frequencia) { // operador logico && as duas condições devem ser verdadeiras para ser executado
    echo "aprovado";
} else {
    echo "reprovado";
}*/

/*if ($media_aluno >= $media || $frequencia_aluno >= $frequencia) { operador logico or uma das duas opões devem ser verdadeiras para ser executado
    echo "aprovado";
} else {
    echo "reprovado";
}
*/

$chovendo = true;

if (!$chovendo) {
    echo "eu vou ficar em casa";
} else {
    echo "eu vou para piscina";
}
/* se passarmos apenas o $chovendo que recebeu um valor booleano verdadeiro, iremos ter como resultado o ficar em casa, mas se colocarmos o operador logico ! not, iremos inverter o valor e teremos o else executado, pq o valor agora vai ser falso*/
