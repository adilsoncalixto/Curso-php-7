<?php
	require_once("config.php");
	//$sql = new Sql();
	//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
	//echo json_encode($usuarios);

	//$root = new Usuario();
	///////////////////////////////////
	// método para buscar um usuário //
	///////////////////////////////////
	//$root->loadById(5);
	//echo $root;

	////////////////////////////////////////////
	// método para retornar todos os usuários //
	////////////////////////////////////////////
	
	//$lista = Usuario::getList();
	//echo json_encode($lista);

	///////////////////////////
	// Testa a classe search //
	///////////////////////////

	//$search = Usuario::search("ana");
	//echo json_encode($search);

	//////////////////////////////////////////////////
	// Testa a classe que busca por usuário e senha //
	//////////////////////////////////////////////////

	//$searchLogin = new Usuario();

	//$searchLogin->searchLogin("Gabriela", "9137");
	//echo $searchLogin;

	// Exemplo de erro

	//echo "</br>-------------------------</br>";
	//$searchLogin->searchLogin("Gabriela", "9136");
	//echo $searchLogin;

	///////////////////////////
	// Testa o método insert //
	///////////////////////////

	//$aluno = new Usuario("Alexandre", "a79s16l81");
	//$aluno->insert();

	//echo $aluno;

	///////////////////////////
	// Testa o método update //
	///////////////////////////

	// $usuario = new Usuario();

	//$usuario->loadById(38);

	//$usuario->update("Andy", "peer-to-peer");

	//echo $usuario;

	///////////////////////////
	// testa a classe delete //
	///////////////////////////

	$usuario = new Usuario();
	$usuario->loadById(14);
	$usuario->delete();
	echo $usuario;

?>