<?php 

    class EditController{

        public function render($CC){
            if(isset($_POST['Editar'])){
                $CC->editarCadastro($_POST['nome'],$_POST['matricula'],$_POST['curso'],$_POST["password"],$_POST['id']);
            }
            include("src/views/editarCadastro.php");
        }
    }




?>