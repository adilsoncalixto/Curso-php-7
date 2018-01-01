<?php
	// Instancia um objeto da classe mysql
	$conn = new mysqli("localhost", "root", "", "dbphp7");
	// Testa se a conexão não irá falhar
	if ($conn->connect_error) {
		echo "Error: " . $conn->connect_error;
	}
	// Prepara o comando para enviar para o banco de dados
	$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ? )");
	// Vai passar os valores das interrogações. O primeiro parâmetro estabelece os tipos de dados (s = string) e depois os valores das interrogações
	$stmt->bind_param("ss", $login, $pass);
	// cria os valores
	$login = "user";
	$pass = "654321";

	// Executar a sql
	$stmt->execute();

	// Inserir novo usuário
	$login = "root";
	$pass = 'xyz';

	$stmt->execute();
?>