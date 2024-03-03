<?php 

    class LoginController{
    public function render($CC){
        if(isset($_POST['login'])){
            include('src/models/logar.php');
            $lg = new Logar;
            $lg->ValidaAcesso($_POST['usuario'],$_POST['senha']);
        }
        include('src/views/login.php');
    }
}

?>