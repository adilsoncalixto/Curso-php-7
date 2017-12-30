<?php
    $pessoas = array();
    array_push($pessoas, array(
        'nome'  => 'João',
        'idade' => 20
    ));
    array_push($pessoas, array(
        'nome'  => 'Glaucio',
        'idade' => 25
    ));
    print_r($pessoas);
    echo "</br>";
    // Para exibir um valor na primeira "dimensão" utilizamos o índice e na segunda a chave.
    print_r($pessoas[0]['nome']);
    
?>