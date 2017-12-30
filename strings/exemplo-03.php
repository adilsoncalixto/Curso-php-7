<?php
    $empresa = "Hcode";
    // str_replace() - recebe 3 argumentos:
    // 1 - O Caractere ou trecho procurado;
    // 2 - O trecho a ser substituído;
    // 3 - A variável que sofrerá as alterações. 
    $empresa = str_replace("o", "0", $empresa);
    echo $empresa;
    echo "</br>";
    $empresa = str_replace("e", "3", $empresa);
    echo $empresa
?>