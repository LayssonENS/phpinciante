<?php
 //isset restorna true caro a variavel tenha sido inicializada ou nula
$valor = 'Laysson';
if (isset($valor)) {
    echo 'Variavel iniciada <br>';
}

//empty retorna true sempre que a variavel estiver vazia ou = 0 ou nulo
$valor2 = '';
if (isset($valor2)) {
    echo 'Variavel iniciada <br>';
}

//is_numeric testa se a variável é numero ou String, retorna true caso for numero, mesmto colocando como string
$valor3 = 3;
if (is_numeric($valor3)) {
    echo 'Variavel iniciada <br>';
}
 ?>