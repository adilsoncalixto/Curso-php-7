<?php
	// Cria a conexão com o PDO
	$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
	// Prepara a query
	$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :deslogin, dessenha = :dessenha WHERE idusuario = :idusuario ");
	// Valores
	$deslogin = "José";
	$dessenha = "novaSenha1";
	$idusuario = 1;
	//bindValues
	$stmt->bindParam(":deslogin", $deslogin);
	$stmt->bindParam(":dessenha", $dessenha);
	$stmt->bindParam(":idusuario", $idusuario);
	// Execytar
	$stmt->execute();

	echo "Alterado com sucesso!";

?>