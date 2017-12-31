<?php
    function ola($texto = "Mundo", $periodo = "Bom dia"){
        return "Olá $texto! $periodo! </br>";
    }
    echo ola("","Mundo");
    echo ola("Mundo", "Boa noite");
    echo ola("Brasil", "Boa tarde");
    echo ola("Alexandre", null);
?>