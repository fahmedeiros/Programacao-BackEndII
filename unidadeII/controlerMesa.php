<?php
    require_once('classes/Mesa.php');

    $mesa1 = new Mesa();
    if($mesa1->adicionarMesa(4, "Madeira Rústica", "Retangular")){
        echo "<br>Mesa cadastrada: <br><br>" . $mesa1->mostrarMesa();
    }
    else
        echo "Ocorreu um erro ao casdastrar a mesa!!!";
?>