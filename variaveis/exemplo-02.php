<?php
    // Utilizando a CamelCase
    $anoNascimento = 1990;
    $nomeCompleto = "Alexandre Silva Lima";
    
    // É possivel utilizar o underscore e números no meio ou final
    $_nome1 = "João";
    $_sobrenome1 = "Rangel";
    
    // Concatenando nome e sobrenome
    $nomeCompleto = $_nome1 . " " . $_sobrenome1;
    echo $nomeCompleto;
    echo "</br>";
    
    // Imprime a variável
    echo $_nome1;
    echo "</br>";

    // Elimina a variável
    unset($_nome1);

    // testa se a variável está definida antes de exibir
    if (isset($_nome1)){
        echo $_nome1;

    }
    
?>