<?php 
//4)
// Modifique a classe 'Cachorro' do exercício anterior.
// Torne as propriedades 'nome' e 'idade' protegidas e utilize métodos getters e setters para acessá-las e modificá-las.

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

        public function setNome($nome){
            return $this->nome = $nome;
        }
        public function setIdade($idade){
            return $this->idade = $idade;
        }
        
    }

    class Cachorro extends Animal{

        //idade de cachorro

        public function getIdade(){
            return $this->idade * 7;
        }

        public function setIdade($idade){
            return $this->idade = $idade * 7;
        }
    }

    $cachorro = new Cachorro("Rex", 1);

    echo "O nome do cachorro é: " .$cachorro->getNome()." e sua idade é: ".$cachorro->getIdade();
    echo "<br>";
    echo "O nome agora é: ".$cachorro->setNome("Zeus")." e a sua idade agora é: ".$cachorro->setIdade(3);



?>