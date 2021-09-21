<?php
    require_once('classes/Fisica.php');
    require_once('classes/Juridica.php');

    $pessoaFisica = new Fisica("Rafael Florindo", "12345678909", "Rua 1", "rafaelfliruindo@email.com", "2010-05-24");
    print_r($pessoaFisica);

    $pessoaJuridica = new Juridica("Farinha Nordestina", "12345678901234", "Rua 2", "rafaelflorindo@email.com", "2010-05-24");

    $dados = $pessoaFisica->exibirDados();
    echo $dados;
?>