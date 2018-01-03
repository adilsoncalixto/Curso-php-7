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

		public function loadById($idusuario){
			$sql = new Sql();
			$result = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :idusuario", array(":idusuario"=>$idusuario));
			if (count($result) > 0) {
				$row = $result[0];
				$this->setIdusuario($row['idusuario']);
				$this->setDeslogin($row['deslogin']);
				$this->setDessenha($row['dessenha']);
				$this->setDtcadastro(new DateTime($row['dtcadastro']));
			}
		}

		//////////////
		// toString //
		//////////////

		public function __toString(){
			return json_encode(array(
				"idusuario"=>$this->getIdusuario(),
				"dessenha"=>$this->getDeslogin(),
				"dessenha"=>$this->getDessenha(),
				"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
			));
		}
	}
?>