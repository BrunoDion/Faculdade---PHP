<?php 
    //2)
    // Modifique a classe 'Livro' do exercício anterior.
    // Adicione métodos públicos 'setTitulo($novoTitulo)' e 'setAutor($novoAutor)' que permitem modificar as propriedades.
    // Use esses métodos para alterar o título e o autor do objeto criado.

    class Livro1{
        private $titulo;
        private $autor;

        public function __construct($titulo, $autor){
            $this->titulo = $titulo;
            $this->autor = $autor;
        }

        public function getTitulo(){
            return $this->titulo;
        }

        public function getAutor(){
            return $this->autor;
        }

        public function setTitulo($titulo){
            return $this->titulo = $titulo;
        }

        public function setAutor($autor){
            return $this->autor = $autor;
        }
    }

    $livro1 = new Livro1("Amazing Fantasy","Stan Lee");

    echo $livro1->getAutor("Mauricio de souza");
    echo "<br>";
    echo $livro1->getTitulo();
    echo "<br>";
    echo $livro1->setTitulo("Novo Titulo");
    echo "<br>";
    echo $livro1->setTitulo("Novo Autor");



?>