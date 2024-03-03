<?php 

    session_start();

    if(isset($_GET['pagina'])){
        $url = $_GET['pagina'].'Controller';
        if(file_exists('src/controllers/'.$url.'.php')){
            include('src/controllers/'.$url.'.php');
            $controller = new $url;
            $controller->render();
        }
        else{
            echo "<h1>404</h1>";
        }
    }
    else{
        include('src/controllers/LoginController.php');
        $controller = new LoginController();
        $controller->render();
    }


?>