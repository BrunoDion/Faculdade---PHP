<?php 
    class Livro{
        private $titulo;
        private $autor;

        public function __construct($titulo, $autor) {
            $this->titulo = $titulo;
            $this->autor = $autor;
        }

        public function getTitulo(){
            return $this->titulo;
        }
        public function getAutor(){
            return $this->autor;
        }
    }

    $livro = new Livro("nao leio", "Desconhecido");

    echo $livro->getAutor();
    echo "<br>";
    echo $livro->getTitulo();
?>