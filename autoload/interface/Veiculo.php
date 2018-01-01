<?php
	interface Veiculo {
		public function acelerar($velocidade);
		public function frenou($velocidade);
		public function trocarMarcha($marcha);
	}
?>