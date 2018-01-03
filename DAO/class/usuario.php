<?php
	class Usuario {
		
		////////////////
		// Atributos  //
		////////////////
		
		private $idusuario;
		private $deslogin;
		private $dessenha;
		private $dtcadastro;
		
		/////////////
		// Métodos //
		/////////////
		
		////////////
		// Geters //
		////////////
		public function getIdusuario(){
			return $this->idusuario;
		}
		public function getDeslogin(){
			return $this->deslogin;
		}
		public function getDessenha(){
			return $this->dessenha;
		}
		public function getDtcadastro(){
			return $this->dtcadastro;
		}

		////////////
		// seters //
		////////////

		public function setIdusuario($idusuario){
			$this->idusuario = $idusuario;
		}
		public function setDeslogin($deslogin){
			$this->deslogin = $deslogin;
		}
		public function setDessenha($dessenha){
			$this->dessenha = $dessenha;
		}
		public function setDtcadastro($dtcadastro){
			$this->dtcadastro = $dtcadastro;
		}

		////////////
		// Outros //
		////////////

		/**
		 * [loadById Carrega os atributos do objeto a partir do Id]
		 * @param  [int] $idusuario [id do usuário a ser carregado]
		 * @return [type]           [Não retorna valor, mas pode ser utilizado com o método __toString]
		 */
		public function loadById($idusuario){
			$sql = new Sql();
			$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :idusuario", array(":idusuario"=>$idusuario));
			if (count($results) > 0) {
				$row = $results[0];
				$this->setData($results[0]);
			}
		}

		/**
		 * [getList retorna todos os usuários cadastrados]
		 * @return [array] [Todos os usuários cadastrados]
		 */
		public static function getList(){
			$sql = new Sql();
			return $sql->select("SELECT * FROM tb_usuarios ORDER BY idusuario");
		}

		/**
		 * [search busca usuário pelo login]
		 * @param  [String] $deslogin [trecho a ser buscado no login de usuário]
		 * @return [array]           [Este array será sempre de apenas um usuários]
		 */
		public static function search($deslogin){
			$sql = new Sql();
			return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :search ORDER BY deslogin", array(
					':search'=>"%" . $deslogin ."%"
			));
		}

		/**
		 * [searchLogin retorna usuário a partir do login e senha]
		 * @param  [String] $deslogin [login do usuário]
		 * @param  [String] $dessenha [senha do usuário]
		 * @return [array]           [Não retorna valor, mas pode ser utilizado com o método __toString]
		 */
		public function searchLogin($deslogin, $dessenha){
			$sql = new Sql();
			$result = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :deslogin AND dessenha = :dessenha", array(":deslogin"=>$deslogin, ":dessenha"=>$dessenha));
			if (count($result) > 0) {
				$this->setData($results[0]);
			} else {
				throw new Exception("Login e/ou senha inválidos");
				
			}
		}

		/**
		 * [setData Seta dados no objeto]
		 * @param [array] $data [um array - Pode por exemplo ser um retorno do banco de dados]
		 */
		public function setData($data){
			$this->setIdusuario($data['idusuario']);
			$this->setDeslogin($data['deslogin']);
			$this->setDessenha($data['dessenha']);
			$this->setDtcadastro(new DateTime($data['dtcadastro']));
		}


		/**
		 * [insert insere dados no banco de dados]
		 * @return [array] [a procedure retorna um array]
		 */
		public function insert(){
			$sql = new Sql();
			// sp = storage procedure / usuarios = nome da tabela / inserti = o que ela faz
			$results = $sql->select("CALL sp_usuarios_insert(:deslogin, :dessenha)", array(
					':deslogin'=>$this->getDeslogin(),
					':dessenha'=>$this->getDessenha()
			));
			if (count($results) > 0){
				$this->setData($results[0]);
			}
		}

		public function update($deslogin, $dessenha){
			$this->setDeslogin($deslogin);
			$this->setDessenha($dessenha);
			$sql = new Sql();
			$sql->query("UPDATE tb_usuarios SET deslogin = :deslogin, dessenha = :dessenha WHERE idusuario = :idusuario", array(
				':deslogin'=>$this->getDeslogin(),
				':dessenha'=>$this->getDessenha(),
				':idusuario'=>$this->getIdusuario()
			));
		}

		///////////////////////
		// Método construtor //
		///////////////////////

		public function __construct($deslogin = "", $dessenha = ""){
			$this->setDeslogin($deslogin);
			$this->setDessenha($dessenha);
		}

		//////////////
		// toString //
		//////////////

		public function __toString(){
			return json_encode(array(
				"idusuario"=>$this->getIdusuario(),
				"deslogin"=>$this->getDeslogin(),
				"dessenha"=>$this->getDessenha(),
				"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
			));
		}
	}
?>