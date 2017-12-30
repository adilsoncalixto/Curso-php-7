<?php
    session_id('20dki3mi5pld85dfo5rfht50s0');
    require_once("config.php");
    session_regenerate_id();
    echo session_id();
    echo "</br>"; 
    var_dump($_SESSION);
?>