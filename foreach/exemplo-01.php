<?php
    $meses = array(
        "Janeiro",
        "Fevereiro",
        "Março",
        "Abril",
        "Maio",
        "Junho",
        "Julho",
        "Agosto",
        "Setembro",
        "Outubro",
        "Novembro",
        "Dezembro"
    );
    foreach($meses as $index => $mes){
        echo "O mês número " . ($index + 1) . " é " . $mes . "</br>";
    }
?>