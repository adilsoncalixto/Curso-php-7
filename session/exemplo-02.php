<?php
    // Inicia a sessão que por padrão não é iniciada automáticamente
    // session_start();
    // inicia a sessão via require_once
    require_once("config.php");
    // Limpa a sessão
    session_unset();
    echo $_SESSION['nome'];
    // Remove o usuário para a sessão
    session_destroy();
?>