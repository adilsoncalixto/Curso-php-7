<?php
    $qualSuaIdade = 18;
    $idadeCrianca = 12;
    $idadeMaior = 18;
    $idadeMelhor = 65;
    // if - else
    if ($qualSuaIdade < $idadeCrianca) {
        echo "Criança";
    } else {
        echo "Não é criança";
    }
    echo "</br>";
    // if - else if - else
    if ($qualSuaIdade < $idadeCrianca) {
        echo "Criança";
    } else if ($qualSuaIdade < $idadeMaior) {
        echo "Adolescente";
    } else if ($qualSuaIdade < $idadeMelhor) {
        echo "Adulto";
    } else {
        echo "Idoso";
    }
    echo "</br>";
    // Operador ternário
    echo ($qualSuaIdade < $idadeMaior) ? "Menor de idade" : "Maior de idade";
?>