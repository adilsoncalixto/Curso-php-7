<?php
    // incremento de 1 em 1
    for ($i = 0; $i < 10; $i++) {
        //echo $i . "</br>";
    }
    echo "</br>";
    // incremento de 5 em 5
    for ($i = 0; $i < 1000; $i += 5) {
        //echo $i . "</br>";
    }
    // Selecionando apenas um intervalo para exibir
    for ($i = 0; $i < 1000; $i += 5) {
        // Caso a $i esteja entre 200 e 800 é utilizado o comando continue.
        // Continue é utilizado em estruturas de laço para pular o resto da iteração atual, e continuar a execução na validação da condição e, então, iniciar a próxima iteração.
        if ($i >= 200 && $i <= 800) continue;
        // Quando o $i for igual a 900 sai do laço com o break. Neste caso não há mais validação da condição.
        // break finaliza a execução da estrutura for, foreach, while, do-while ou switch atual.
        if ($i === 900) break;
        echo $i . "</br>";
    }
?>