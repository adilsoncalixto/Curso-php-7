<?php
    class Pessoa {
        // Atributos
        public $nome;
        // Métodos
        public function falar(){
            return "O meu nome é " . $this->nome;
        }
    }
    // Instancia um objeto da classe pessoa
    $alexandre = new Pessoa();
    // seta um atributo desta classe
    $alexandre->nome = "Alexandre Lima";
    // utiliza o método falar
    echo $alexandre->falar();
    
?>