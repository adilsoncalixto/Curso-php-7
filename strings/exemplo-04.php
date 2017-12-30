<?php
    $frase = "A repetição é mãe da retenção.";
    // Definimos a palavra que iremos procurar.
    $palavra = "mãe";
    // strpos() - Primeiro argumento é onde você que perguntar e segundo argumento é o que. Retorna um int que significa o início da palavra/trecho da oração procurado.
    $q = strpos($frase, $palavra);
    // retorno int(17);
    var_dump($q);
    echo "</br>";
    // Para exibir o conteúdo que está antes da palavra procurada. substr() - Primeiro argumento é toda a oração, segundo de onde eu quero partir e terceiro qual é o último caractere.
    $texto = substr($frase, 0, $q);
    var_dump($texto);
    echo "</br>";
    // Para exibir o conteúdo a partir da palavra procurada. Neste exemplo a palavra procurada não é exibida. utilizamos a função strlen() para saber o tamanho da palavra. e somando à variável q sabemos o ponto para iniciar a imprimir a frase. Esta função também é utilizada para sabermos onde finaliza a frase com o strlen($frase);
    $texto2 = substr($frase, $q + strlen($palavra), strlen($frase) );
    var_dump($texto2);
?>