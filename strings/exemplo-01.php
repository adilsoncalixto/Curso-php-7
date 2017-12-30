<?php
    // São criadas duas variáveis do tipo string
    $nome1 = "AL Sites";
    $nome2 = 'Criação de sites';
    // Verificamos com o var_dump() que ambas são strings
    var_dump($nome1, $nome2);
    // As aspas duplas reconhecem o valor da variável
    echo "<br/>";
    // Interpolação de variável
    echo "ABC $nome1";
    echo "<br/>";
    // No caso das aspas simples tudo é texto
    echo 'ABC $nome1';
    
?>