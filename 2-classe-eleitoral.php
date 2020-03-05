<?php

/**
 * Este exercício deverá ser executado em linha de comando.
 *
 * Calcular a idade do cidadão a partir do seu ano de nascimento (ignorar mês e dia)
 * e definir sua Classe Eleitoral de acordo com a tabela:
 *
 * Faixa                                                | Classe
 * ---------------------------------------------------------------------------
 * A baixo de 16 anos                                   | Não eleitor
 * Faixa de 18 a menor que 65                           | Eleitor obrigatório
 * Faixa de 16 a menor que 18 e a cima de 65, inclusive | Eleitor facultativo
 */

// exemplo recuperar Ano atual do S.O.

$anoAtual = date('Y');
$anoNasc = readline('Ano de nascimento: ');
$idade = $anoAtual - $anoNasc;

echo '' . "\n";
echo '---------Classe eleitoral----------' . "\n";
echo '' . "\n";

if($idade >= 18 && $idade < 65) {
    echo 'Idade: ' . $idade . "\n" . 'Classe: eleitor obrigatório';
} elseif (($idade >= 16 && $idade < 18) || $idade >= 65 ) {
    echo 'Idade: ' . $idade . "\n" . 'Classe: eleitor facultativo';
} else {
    echo 'Idade: ' . $idade . "\n" . 'Classe: não eleitor';
}