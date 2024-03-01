<?php 
//6)
// Defina uma classe base 'Veiculo' com propriedades como 'marca' e 'modelo'.
// Crie duas classes derivadas, 'Carro' e 'Moto', que herdam de 'Veiculo'.
// Implemente métodos específicos para cada classe e um método comum para exibir informações gerais.
// Demonstre o polimorfismo chamando o método comum com objetos de ambas as classes derivadas.

    class Veiculo{
        public $marca;
        public $modelo;

        public function __construct($marca,$modelo){
            $this->marca = $marca;
            $this->modelo = $modelo;
        }
        
        public function info(){
            echo "A fabricante é: ".$this->marca." e o modelo é: ".$this->modelo;
        }


    }

    class Carro extends Veiculo{
        public function abrePorta(){
            echo "Porta aberta!";
        }
    }

    class Moto extends Veiculo{
        public function empinarTraseira(){
            echo "Empinando....";
        }
    }

    $carro1 = new Carro("Toyota", "Hylux");
    $moto1 = new Moto("Yamaha", "Fazer-600");

    echo $carro1->info();
    echo "<br>";
    echo $moto1->info();



?>