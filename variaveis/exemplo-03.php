<?php
    // Tipos de dados
    // PHP possui 8 tipos de dados divididos em 3 grupos:
    // 1 - Básicos: Inteiros, String, float, boolean
    // 2 - Compostos: Arrays e Objetos
    // 3 - Especiais: resource e o NULL
    
    // 1.1 - String
    $nome = "Alexandre";
    $site = 'www.alsites.com.br';
    
    // 1.2 - Inteiro
    $ano = 1990;
    
    // 1.3 - Float
    $salario = 5500.99;
    
    // 1.4 - boolean
    $bloqueado = false;
    
    // 2.1 - Array
    $frutas = array("Abacaxi", "Laranja", "Manga");
    
    // 2.2 - Objeto
    $nascimento = new datetime();
    
    // 3.1 - resource
    $arquivo = fopen("exemplo-03.php", "r");
    
    // 3.2 - NULL
    $nulo = null;
?>