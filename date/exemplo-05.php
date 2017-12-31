<?php
    // Corrigir fuso horário
    date_default_timezone_set("America/Sao_Paulo");
    // Instancia um objeto da classe DateTime();
    $dt = new DateTime();
    // Instancia um objeto da classe DateInterval();
    $periodo = new DateInterval("P15D");
    // Irá mostrar a data atual
    echo $dt->format("d/m/Y H:i:s");
    echo "</br>";
    // utilizamos um método add() da classe DateTime()
    $dt->add($periodo);
    // Exibe a data após ser acrescido o intervalo determinado no método add();
    echo $dt->format("d/m/Y H:i:s");
?>