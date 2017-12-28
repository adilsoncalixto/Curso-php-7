<?php
    // Variáveis pré-definidas ou Arrays super globais
    // Recebe o valor na URL, ex.: http://localhost/udemy/php7/variaveis/exemplo-04.php?a=123
    $num = (int)$_GET["a"];
    
    //$ip = $_SERVER["REMOTE_ADDR"];
    $ip = $_SERVER["SCRIPT_NAME"];
    echo $ip;
    
?>