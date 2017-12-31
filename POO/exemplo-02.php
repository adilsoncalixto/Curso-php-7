<?php
    class Carro {
        // Atributos
        private $modelo;
        private $motor;
        private $ano;
        // Métodos seters
        public function setModelo($modelo){
            $this->modelo = $modelo;
        }
        public function setMotor($motor){
            $this->motor = $motor;
        }
        public function setAno($ano){
            $this->ano = $ano;
        }
        // Métodos geters
        public function getModelo(){
            return $this->modelo;
        }
        public function getMotor():float{
            return $this->motor;
        }
        public function getAno():int{
            return $this->ano;
        }
        // exibe todos os atributos
        public function exibir(){
            return array(
                "modelo" => $this->getModelo(),
                "motor" => $this->getMotor(),
                "ano" => $this->getAno()
            );
        }
    }
    
    // Instancia um objeto da classe Carro()
    $gol = new Carro();
    $gol->setModelo("Gol GT");
    $gol->setMotor("1.6");
    $gol->setAno("2017");
    var_dump($gol->exibir());
?>