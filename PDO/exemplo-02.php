<?php
	print_r(PDO::getAvailableDrivers());
	// Instancia um objeto da classe PDO
	$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "root");
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