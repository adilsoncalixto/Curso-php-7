<?php
	// Cria a conexão com o PDO
	$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
	// Inicia uma transação
	$conn->beginTransaction();
	// Prepara a query
	$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");
	// Valores para WHERE
	$idusuario = 4;
	// Executa
	$stmt->execute(array($idusuario));
	// Cancela a operação
	//$conn->rollback();
	// Confirma a operação
	$conn->commit();

	echo "Excluido com sucesso!";

?>