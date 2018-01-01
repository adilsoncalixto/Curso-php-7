<?php
	// Instancia um objeto da classe mysql
	$conn = new mysqli("localhost", "root", "", "dbphp7");
	// Testa se a conexão não irá falhar
	if ($conn->connect_error) {
		echo "Error: " . $conn->connect_error;
	}
	// selecionar valores do db
	$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY idusuario");
	$data = array();
	while ($row = $result->fetch_assoc()) {
		array_push($data, $row);
	}
	echo json_encode($data);
?>