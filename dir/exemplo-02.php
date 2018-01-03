<?php
	date_default_timezone_set("America/Sao_Paulo");
	// scandir = retorna um array com o nome dos arquivos que a pasta contém
	$images = scandir("images");

	$data = array();

	foreach ($images as $img) {
		if (!in_array($img, array(".", ".."))) {
			$filename = "images" . DIRECTORY_SEPARATOR . $img;
			$info = pathinfo($filename);
			$info["size"] = filesize($filename);
			$info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
			$info["url"] = "http://localhost/udemy/php7/dir/" . str_replace("\\", "/", $filename); 
			array_push($data, $info);
		}
	}

	echo json_encode($data);

?>