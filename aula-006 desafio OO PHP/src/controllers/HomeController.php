<?php 

    class HomeController{
        public function render($CC){
            if(isset($_POST['enviar'])){
                $CC->CadastrarAluno($_POST['newLogin'],$_POST['newMatricula'],$_POST['newCurso'],$_POST['newPassword']);
            }
            include('src/views/home.php');
            include('src/views/cadastro.php');
        }
    }


?>