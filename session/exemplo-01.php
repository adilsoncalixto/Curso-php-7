<?php
    // Inicia a sessão que por padrão não é iniciada automáticamente
    // session_start();
    // Inicia a sessão via require_once
    require_once("config.php");
    $_SESSION['nome'] = "Alexandre";
?>