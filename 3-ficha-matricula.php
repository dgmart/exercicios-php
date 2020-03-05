<?php

/**
 * Este exercício deverá ser executado em linha de comando.
 * 
 * Registrar os dados do aluno para matrícula com as seguintes informações:
 * 
 * - Matrícula, número de 5 dígitos;
 * - Nome completo;
 * - Gênero, M ou F;
 * - Sigla do curso: SI, EE, EM, EC ou AQ;
 * - Coeficiente de rendimento, número de 0 a 10.
 * 
 * Ao final exibir a ficha completa de matrícula com as seguintes informações:
 * 
 * - Matrícula;
 * - Nome completo;
 * - Gênero: exibir o texto "Masculino" ou "Feminino";
 * - Curso: exibir o nome completo do curso como segue:
 *        - SI = Sistemas de Informação;
 *        - EE = Engenharia Elétrica;
 *        - EM = Engenharia Mecânica;
 *        - EC = Engenharia Civil;
 *        - AQ = Arquitetura;
 * - Status do coeficiente de rendimento de acordo com a tabela:
 *        Valor              | Status
 *        ----------------------------------------
 *        de 9 a 10          | Excelente
 *        de 7 a menor que 9 | Bom
 *        de 5 a menor que 7 | Regular
 *        de 3 a menor que 5 | Necessita melhoras
 *        a baixo de 3       | Preocupante
 * 
 */

$matricula = readline('Matricula (composta por 5 digitos): ');
$nomeCompleto = readline('Nome completo: ');
$genero = readline('Gênero, M ou F: ');
$siglaCurso = readline('Sigla do curso - SI, EE, EM, EC ou AQ: ');
$coeficiente = readline('Coeficiente de rendimento, número de 0 a 10: ');

echo '' . "\n";
echo '---------Ficha de matricula----------' . "\n";
echo '' . "\n";

$matQuant = strlen($matricula);
if ($matQuant == 5) {
    echo 'Matricula: ' . $matricula . "\n";
 } else {
    echo "Matricula inválida" . "\n";
 }

echo 'Nome completo: ' . $nomeCompleto . "\n";

if ($genero == 'F') {
    echo 'Gênero: Feminino' . "\n";
} elseif ($genero == 'M') {
    echo 'Gênero: Masculino' . "\n";
} else {
    echo 'Gênero inválido' . "\n";
}

if ($siglaCurso == 'SI') {
    echo 'Curso: SI = Sistemas de Informação' . "\n";
} elseif ($siglaCurso == 'EE') {
    echo 'Curso: EE = Engenharia Elétrica' . "\n";
} elseif ($siglaCurso == 'EM') {
    echo 'Curso: EM = Engenharia Mecânica' . "\n";
} elseif ($siglaCurso == 'EC') {
    echo 'Curso: EC = Engenharia Civil' . "\n";
} elseif ($siglaCurso == 'AQ') {
    echo 'Curso: AQ = Arquitetura' . "\n";
} else {
    echo 'Curso inválido' . "\n";
}

if ($coeficiente >= 9 && $coeficiente <= 10) {
    echo 'Coeficiente de rendimento: excelente' . "\n";
} elseif ($coeficiente >= 7 && $coeficiente < 9) {
    echo 'Coeficiente de rendimento: bom' . "\n";
} elseif ($coeficiente >= 5 && $coeficiente < 7) {
    echo 'Coeficiente de rendimento: regular' . "\n";
} elseif ($coeficiente >= 3 && $coeficiente < 5) {
    echo 'Coeficiente de rendimento: necessita melhoras' . "\n";
} elseif ($coeficiente < 3) {
    echo 'Coeficiente de rendimento: preocupante' . "\n";
} else {
    echo 'Nota inválida' . "\n";
}