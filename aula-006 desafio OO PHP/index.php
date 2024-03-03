<?php 

    session_start();
    include('src/controllers/CadastroController.php');
    $CC = new CadastroAluno();

    if(isset($_GET['pagina'])){
        $url = $_GET['pagina'].'Controller';
        if(file_exists('src/controllers/'.$url.'.php')){
            include('src/controllers/'.$url.'.php');
            $controller = new $url;
            $controller->render($CC);
        }
        else{
            echo "<h1>404</h1>";
        }
    }
    else{
        include('src/controllers/LoginController.php');
        $controller = new LoginController();
        $controller->render($CC);
    }


?>