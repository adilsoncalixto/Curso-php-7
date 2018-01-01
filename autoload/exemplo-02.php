<?php
	// Forma de utilizar criando uma
	/*function incluirClasses($nomeClasse){
		if (file_exists($nomeClasse . ".php") === true){
				require_once($nomeClasse . ".php");	
		}
	}*/
	// Edpois chamando a função dentro da classe sep_autoload_register
	//spl_autoload_register("incluirClasses");

	// forma de realizar o load utilizando uma função anônima

	spl_autoload_register(function($nomeClasse){
		if (file_exists($nomeClasse . ".php") === true){
				require_once($nomeClasse . ".php");	
		}
		if (file_exists("abstratas" . DIRECTORY_SEPARATOR . $nomeClasse . ".php") === true){
				require_once("abstratas" . DIRECTORY_SEPARATOR . $nomeClasse . ".php");	
		}
		if (file_exists("interface" . DIRECTORY_SEPARATOR . $nomeClasse . ".php") === true){
				require_once("interface" . DIRECTORY_SEPARATOR . $nomeClasse . ".php");	
		}
	});
	$carro = new DelRey();
	echo $carro->acelerar(80);
?>