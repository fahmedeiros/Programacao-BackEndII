<?php 
    class Pessoa {
        public $nome;
        public $email;
        public $telefone;
        public $dataNascimento;
    
        public function getPessoa(){
            echo "<br>Nome: " . $this->nome;
            echo "<br>E-maeil: " . $this->email;
            echo "<br>Telefone: " . $this->telefone;
            echo "<br>Data Nasciomento: " . $this->dataNascimento;
        }
}
?>