<?php
    // Operador Null Coalescing "??" (somente no php7)
    $a = null;
    $b = null;
    $c = 10;
    
    echo $a ?? $b ?? $c;
?>