<?php
    // Exemplo errado com looping infinito
    // Apresenta este erro ao final dos 30 segundos: "Fatal error: Maximum execution time of 30 seconds exceeded in C:\xampp\htdocs\udemy\php7\for\exemplo-02.php on line 4"
    for ($i = 0; $i < 10; $i--) {
        echo $i . " ";
    }
?>