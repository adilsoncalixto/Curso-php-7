<?php
    $condicao = true;
    while ($condicao) {
        // função rand() - recebe número inicial e número final
        $numero = rand(1, 10);
        if ($numero === 3) {
            echo "Número sorteado: " . $numero;
            $condicao = false;
            // exit para sair do while e não executar o último echo.
            exit;
        }
        echo "Número sorteado: " . $numero . "</br>";
    }
?>