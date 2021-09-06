<?php
    require_once('classes/Pessoa.php');
    
    $nome = "Rafael A. Florindo";
    $email = "rafaelflorindo@hotmail.com";
    $telefone = "44 3027-9390";
    $dataNascimento = "2020-08-14";

    $pessoa = new Pessoa($nome, $email, $telefone, $dataNascimeto);
        var_dump($pessoa);
?>