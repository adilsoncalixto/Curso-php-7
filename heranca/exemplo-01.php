<?php 
	class Documento {
		// Atributos
		private $numero;
		// Métodos Seters e Geters
		public function getNumero(){
			return $this->numero;
		}
		public function setNumero($numero){
			$this->numero = $numero;
		}
	}

	class Cpf extends Documento {
		// Métodos
		public function validar():bool{
			$numeroCPF = $this->getNumero();
			// Validação do cpf
			if ($numeroCPF){
				return true;
			} else {
				return false;
			}
		}
	}

	$doc = new Cpf();
	$doc->setNumero("93580843087");
	var_dump($doc->validar());
	echo "</br>";
	echo $doc->getNumero();
?>