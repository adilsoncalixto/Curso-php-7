<?php
    $a = 10;
    // Passagem de parâmetro por valor
    /*function trocaValor($a){
        $a += 50;
        return $a;
    }
    //echo $a . "</br>";
    echo trocaValor($a);
    echo "</br>";
    echo $a;*/
    // Passagem de parâmetro por referência
    function trocaValor(&$a){
        $a += 50;
        return $a;
    }
    //echo $a . "</br>";
    echo trocaValor($a);
    echo "</br>";
    echo trocaValor($a);
    echo "</br>";
    echo $a;
?>