<?php
	interface Veiculo {
		public function acelerar($velocidade);
		public function frenou($velocidade);
		public function trocarMarcha($marcha);
	}

	class Civic implements Veiculo {
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

	$carro = new Civic();
	echo $carro->trocarMarcha(5);

?>