
<?php
//3)
// Crie uma classe base chamada 'Animal' com propriedades privadas 'nome' e 'idade'.
// Implemente um método construtor e métodos públicos para acessar e modificar essas propriedades.
// Crie uma classe derivada chamada 'Cachorro' que herda de 'Animal' e sobrescreva o método de acesso à propriedade 'idade'.
// Crie um objeto da classe 'Cachorro' e exiba suas propriedades.

    class Animal{
        protected $nome;
        protected $idade;
        
        public function __construct($nome,$idade){
            $this->nome = $nome;
            $this->idade = $idade;
        }
        public function getNome(){
            return $this->nome;
        }

        public function getIdade(){
            return $this->idade;
        }
        
    }

    class Cachorro extends Animal{

        public function getIdade(){
            return $this->idade * 7;
        }
    }

    $cachorro = new Cachorro("Rex", 1);

    echo "O nome do cachorro é: " .$cachorro->getNome()." e sua idade é: ".$cachorro->getIdade();
    
?>