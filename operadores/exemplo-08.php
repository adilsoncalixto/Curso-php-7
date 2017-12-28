<?php
    $resultado = 10 + 3 / 2;
    echo $resultado;
    echo "</br>";
    // utilizando o parênteses para determinar precedência
    $resultado = (10 + 3) / 2;
    echo $resultado;
    echo "</br>";
    // utilizando operadores lógicos
    // operador e (&&)
    $resultado = (10 + 3) / 2 > 5 && 10 + 5 < 3;
    var_dump($resultado);
    echo "</br>";
    // operador ou (||)
    $resultado = (10 + 3) / 2 > 5 || 10 + 5 < 3;
    var_dump($resultado);
?>