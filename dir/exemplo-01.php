<?php
	// $name pega o nome do diretório
	$name = "images";
	// Este if testa se o diretório existe
	if(!is_dir($name)){
		mkdir($name);
		echo "diretório $name criado com sucesso.";
	} else {
		rmdir($name);
		echo "Diretório $name já existe e foi removido! kkk";
	}
?>