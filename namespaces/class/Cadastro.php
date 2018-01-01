<?php
	class Cadastro {
		// Atributos
		private $nome;
		private $email;
		private $senha;
		// Métodos
		// Geters
		public function getNome():string {
			return $this->nome;
		}
		public function getEmail():string {
			return $this->email;
		}
		public function getSenha():string {
			return $this->senha;
		}
		// Seters
		public function setNome($nome){
			$this->nome = $nome;
		}
		public function setEmail($email){
			$this->email = $email;
		}
		public function setSenha($senha){
			$this->senha = $senha;
		}
		// toString
		public function __toString(){
			return json_encode(
				array(
					"nome"=>$this->getNome(), 
					"email"	=>	$this->getEmail(), 
					"senha"	=>	$this->getSenha()
				)
			);
		}
	}
?>