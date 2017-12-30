<?php
    require_once("config.php");
    echo session_save_path();
    echo "</br>";
    switch (session_status()) {
        case PHP_SESSION_DISABLED:
            echo "A constante PHP_SESSION_DISABLED é usada se as sessões estiverem desabilitadas.";
            break;
        case PHP_SESSION_NONE:
            echo "A constante PHP_SESSION_NONE é usada se as sessões estiverem habilitadas, mas nenhuma existir.";
            break;
        case PHP_SESSION_ACTIVE:
            echo "A constante PHP_SESSION_ACTIVE é usada se as sessões estiverem habilitadas, e uma existir.";
            break;
    }
?>