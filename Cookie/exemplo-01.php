<?php 
	$data = array(
		"empresa"=>"AL Sites - Desenvolvimento Web"
	);
	setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);
	echo "Ok";
?>