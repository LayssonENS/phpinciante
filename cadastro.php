<?php

//Validando campos com PHP

if (isset($_POST['nome']) && empty($_POST['nome'])) {
    echo 'Preencha o nome completo';
}

if (isset($_POST['cpf']) && empty($_POST['cpf'])) {
    echo 'Preencha o cpf completo';
}

if (isset($_POST['cpf']) && !is_numeric($_POST['cpf'])) {
    echo 'Apenas numeros no cpf';
}



?>
<form method="post" action="">
    <label>
        Nome completo*:
        <input type="text" name="nome">
    </label>

    <label>
        CPF*:
        <input type="text" name="cpf">
    </label>

    <input type="submit" value="Cadastrar">

    </f orm> 