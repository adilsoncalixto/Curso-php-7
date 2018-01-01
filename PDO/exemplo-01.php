<?php
	// Instancia um objeto da classe PDO
	$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
	// Cria a declaração sql
	$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY idusuario");
	// Execute
	$stmt->execute();

	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

	foreach ($result as $row) {
		foreach ($row as $key => $value) {
			echo "<strong>" . $key . ":</strong> " . $value . "</br>";
		}
		echo "------------------------------------------------------";
		echo "</br>";
	}
?>