<?php 

    session_start();

    require_once './src/controlers/LoginController.php';

    $loginController = new LoginController();
    $loginController->autenticar($_POST['email'], $_POST['senha']);


?>