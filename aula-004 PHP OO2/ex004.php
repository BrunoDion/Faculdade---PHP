<?php 

    // Crie uma classe base 'Animal' com um método 'emitirSom'.
// Crie duas classes derivadas, 'Cachorro' e 'Gato', que herdam de 'Animal'.
// Sobrescreva o método 'emitirSom' em ambas as classes derivadas para representar o som característico.
// Demonstre o polimorfismo chamando o método comum com objetos de ambas as classes derivadas.

    class Animal{
        public function emitirSom(){
             
        }
    }

    class Cachorro extends Animal{
        public function emitirSom()
        {
            echo "Late";
        }
    }

    class Gato extends Animal{
        public function emitirSom()
        {
            echo "Mia";
        }
    }

    $cachorro = new Cachorro();
    $cachorro->emitirSom();
    echo "<br>";
    $gato = new Gato();
    $gato->emitirSom();


?>