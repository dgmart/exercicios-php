<?php

/**
 * Este exercício deverá ser executado em linha de comando.
 * 
 * A instituição CredHyper está diponibilizando crédito imediato em condições especiais
 * para clientes que se encaixam nas seguintes regras:
 * 
 * Rendimento médio últimos 12 meses (R$) | Crédito
 * -----------------------------------------------------------------
 * Até 500                                | Nenhum crédito
 * A cima 500 até 1000                    | 30% do rendimento médio
 * A cima 1000 até 3000                   | 40% do rendimento médio
 * A cima de 3000                         | 50% do rendimento médio
 */

//  exemplo de leitura de valores pela linha de comando
$rendimento = readline('Rendimento médio últimos 12 meses: ');

// exemplo de saída de números com formatação para linha de comando
echo 'Rendimento do cliente: ' . number_format($rendimento, 2, ',', '.') . PHP_EOL;
