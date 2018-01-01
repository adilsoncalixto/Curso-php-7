<?php
    class Endereco {
        // Atributo
        private $logradouro;
        private $numero;
        private $cidade;
        // Métodos
        public function __construct($a, $b, $c){
            $this->logradouro = $a;
            $this->numero = $b;
            $this->cidade = $c;
        }
        public function __destruct(){
            var_dump("Destruiu");
        }
        public function __toString(){
            return $this->logradouro . ", " . $this->numero . " - " . $this->cidade;
        }
    }
    $meuEndereco = new Endereco("Rua Gildo de Freitas", 1601, "Canoas");
    var_dump($meuEndereco);
    echo "</br>";
    echo $meuEndereco;
    echo "</br>";
    unset($meuEndereco);
?>