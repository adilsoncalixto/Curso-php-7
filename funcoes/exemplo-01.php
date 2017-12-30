<?php
    // Toda função deve conter o comando return caso apenas execute alguma função sem retornar nenhum valor é chamado de subrotina.
    function ola(){
        // utilizando o echo abaixo é uma subrotina
        //echo "Olá mundo!</br>"; 
        // utilizando o return abaixo é uma função
        return "Olá mundo!</br>";
    }
    echo ola();
    $frase = ola();
    echo strlen($frase);
?>