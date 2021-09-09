<?php 
    require_once('classes/Funcionario.php');

    $funcionario = new Funcionario();
    $funcionario->setNome("Carlos Daniel");
    $funcionario->setEmail("carlosdanilo@hotmail.com");
    $funcionario->setSalario(4500.00);
    var_dump($funcionario);

    echo "<br>Nome: " .$funcionario->getNome();
    echo "<br>E-mail: " .$funcionario->getEmail();
    echo "<br>Salário: " .$funcionario->getSalario();
?>