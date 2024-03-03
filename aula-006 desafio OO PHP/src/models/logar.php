<?php 

    class Logar{
        private $usuario = [
            ['login'=>'Bruno','senha'=>'1234'],
            ['login'=>'Luiz','senha'=>'1234']
        ];

        public function ValidaAcesso($user, $senha){
            foreach ($this->usuario as $key => $value) {
                if($value['login'] == $user && $value['senha'] == $senha){
                    $_SESSION ['login'] = $user; 
                    $_SESSION ['senha'] = $senha; 
                    header('Location: index.php?pagina=home');
                    die();
                }
            }
            echo "<script> alert('falha ao logar') </script>";
        }
    }
