<?php
    // Escopo de variável
    $nome = "Glaucio";
    
    function teste () {
        global $nome;
        echo $nome . "</br>";
    }
    
    function teste2 () {
        $nome = "João";
        echo $nome;
    }
    
    teste();
    teste2();
?>