<?php
require_once('classes/Pessoa.php');

$pessoa = new Pessoa();

$pessoa->nome = "Rafael A. Florindo";
$pessoa->email = "rafaelflorindo@hotmail.com";
$pessoa->telefone = "44 3027-9390";
$pessoa->dataNascimento = "2020-08-14";

echo "<div><strong>Dados da Pessoa</strong>";
$pessoa->getPessoa();
echo "</div>";
?>