<?php
	// Cria a conexão com o PDO
	$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
	// Prepara a query
	$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:deslogin, :dessenha)");
	// Valores
	$deslogin = "José";
	$dessenha = "9137";
	//bindValues
	$stmt->bindParam(":deslogin", $deslogin);
	$stmt->bindParam(":dessenha", $dessenha);
	// Execytar
	$stmt->execute();

	echo "Inserido com sucesso!";

?>