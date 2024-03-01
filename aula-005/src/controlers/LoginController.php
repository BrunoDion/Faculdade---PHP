<?php 

    require_once "./src/models/User.php";

    class LoginController{
        private $users;

        public function __construct(){
            $this->users = [
                new User(1, 'bruno@teste.com.br', '1234', 1),
                new User(2, 'leo@teste.com.br', '1234', 2),
                new User(3, 'luiz@teste.com.br', '1234', 2),
                new User(4, 'tiago@teste.com.br', '1234', 2)
            ];    
        }

        public function autenticar($email, $password){
            foreach($this->users as $user){
                if ($user->email === $email && $user->verificarSenha($password)) {
                    $_SESSION['autenticar'] = 'SIM';
                    $_SESSION['id'] = $user->id;
                    $_SESSION['profile_id'] = $user->profile_id;
                    header('Location: ./src/view/home.php');
                    exit;
                }
                $_SESSION['autenticar'] = 'NAO';
                header('Location: index.php?login=erro');
                exit;
            }
           
          
           
        }
    }

?>