<?php
    // Corrigir fuso horário
    date_default_timezone_set("America/Sao_Paulo");
    // Instancia um objeto da classe DateTime();
    $dt = new DateTime();
    // Exibe a data com o método format();
    echo $dt->format("d/m/Y H:i:s");
?>