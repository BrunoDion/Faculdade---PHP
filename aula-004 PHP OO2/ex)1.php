<?php 
    //1)
    // Crie uma classe chamada 'Livro' com propriedades privadas 'titulo' e 'autor'.
    // Implemente um método construtor para inicializar essas propriedades.
    // Em seguida, crie um objeto da classe 'Livro' e exiba suas propriedades.

    class Livro{
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
    }

    $livro = new Livro("Amazing Fantasy","Stan Lee");

    echo $livro->getAutor();
    echo "<br>";
    echo $livro->getTitulo();

    echo "<hr>";
?>

