<?php
    $nome = "joão rangel";
    echo $nome;
    echo "</br>";
    // para deixar tudo em maiúscula
    $nome = strtoupper($nome);
    echo $nome;
    echo "</br>";
    // deixa tudo e minúscular
    $nome = strtolower($nome);
    echo $nome;
    echo "</br>";
    // deixa a primeira letra de cada palavra maiúscula
    $nome = ucwords($nome);
    echo $nome;
    echo "</br>";
    // deixa a primeira palavra da oração em maiúsculo
    // como função só altera a primeira letra utilizamos a função strtolower para ter certeza de que as restantes são maiúsculas.
    $nome = ucfirst(strtolower($nome));
    echo $nome;
?>