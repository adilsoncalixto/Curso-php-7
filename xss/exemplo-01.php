<form method="post">
	<input type="text" name="busca">
	<button type="submit"> Enviar</button>
</form>
<?php
	$_POST['busca'] = '<a href="#"><strong></a><script>alert("ok")</script>';
	if (isset($_POST['busca'])) {
		//echo strip_tags($_POST['busca']);
		echo htmlentities($_POST['busca']);
	}
?>