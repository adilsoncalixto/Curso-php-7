<?php
    $json = '
[{"nome":"Jo\u00e3o","idade":20},{"nome":"Glaucio","idade":25}]';
    // json_decode - transforma o JSON em array. O parâmetro true é para que o retorno seja array, caso contrario retorna objeto
    $data = json_decode($json, true);
    var_dump($data);
?>