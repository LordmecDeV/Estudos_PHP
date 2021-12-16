<?php
$media = 7;
$media_recuperacao = 5;
$frequencia = 70;


$media_aluno = 7;
$frequencia_aluno = 70;

$reprovado_por_faltas = $frequencia_aluno < $frequencia ? true : false;

if (!$reprovado_por_faltas) { //usamos o operador logico para passar o valor booleano como verdadeiro
    if ($media_aluno < $media_recuperacao) { // se a media do aluno for menor que a media da recuperação, esta reprovado
        echo "Reprovado";
    } else if ($media_aluno < $media) { // senão se a media do aluno for menor que a media, ele estara de recuperação, so ira entrar nessa condição caso a nota seja entre 5 e 6.9
        echo "Recuperação";
    } else {
        echo "Aprovado"; //senão ele sera aprovado
    }
} else {
    echo "Reprovado!";
}
/* o elseif faz com que a gente tenha mais de uma condição que possa ser executada, e ele ira parar na primeira condição que for verdadeira, se usarmos varios ifs, todos vão ser executados*/