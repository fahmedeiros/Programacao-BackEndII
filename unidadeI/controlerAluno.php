<?php
    require_once('classes/Aluno.php');

    $aluno = new Aluno(1234, "João Fernandes");

    echo ($aluno->setNotas(6.5))? "<br>Nota incluida com sucesso": "<br>Erro ao Incluir Nota";
    echo ($aluno->setNotas(5.5))? "<br>Nota incluida com sucesso": "<br>Erro ao Incluir Nota";
    echo ($aluno->setNotas(6.5))? "<br>Nota incluida com sucesso": "<br>Erro ao Incluir Nota";
    echo ($aluno->setNotas(5.5))? "<br>Nota incluida com sucesso": "<br>Erro ao Incluir Nota";
    echo ($aluno->setNotas(9.0))? "<br>Nota incluida com sucesso": "<br>Erro ao Incluir Nota";

    echo "<div><br>Notas do aluno";
    echo "<br>Nome: " . $aluno->nome;

    $aluno->obterNotas();
    echo "<br>Média: " . $aluno->obterMedia();
    echo "</div>"
?>