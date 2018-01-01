<?php
	interface Veiculo {
		public function acelerar($velocidade);
		public function frenou($velocidade);
		public function trocarMarcha($marcha);
	}

	abstract class Automovel implements Veiculo {
		public function acelerar($velocidade){
			return "O veículo acelerou até " . $velocidade . " Km/h. </br>";
		}
		public function frenou($velocidade){
			return "O veículo frenou até " . $velocidade . " milésimos de segundo. </br>";
		}
		public function trocarMarcha($marcha){
			return "O veículo possui " . $marcha . " marchas. </br>";
		}
	}
	class DelRey extends Automovel {
		public function empurrar(){

		}
	}
	$carro = new DelRey();
	echo $carro->acelerar(200);
?>