<?php
	// Cria a conexão com o PDO
	$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
	// Prepara a query
	$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :idusuario ");
	// Valores
	$idusuario = 1;
	//bindValues
	$stmt->bindParam(":idusuario", $idusuario);
	// Execytar
	$stmt->execute();

	echo "Excluido com sucesso!";

?>