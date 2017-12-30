<?php
    // Incluir o arquivo que possui a função
    // O comando include tenta executar mesmo que arquivo não existe ou esteja com erro
    // include("inc/exemplo-01.php");
    // require() para execução se arquivo não existir ou estiver com erro - no PHP ele gera uma exceção para ser tratada com try - catch
    // require("inc/exemplo-01.php");
    // Para garantir que não vamos incluir mais de uma vez utilizamos o require_once ou include_once.
    require_once("inc/exemplo-01.php");
    // utiliza a função para somar
    $resultado = somar(10, 20);
    echo $resultado;
?>