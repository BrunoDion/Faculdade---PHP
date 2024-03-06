<?php 

   $pdo = new PDO("mysql:host=localhost;dbname=alunos", "root", "");

    $sql = $pdo->prepare("create table if not exists aluno(
        id int PRIMARY KEY AUTO_INCREMENT,
        nome varchar(255) not null,
        matricula int unique,
        curso varchar(255) not null,
        password varchar(255) not null
        )");

        $sql->execute();
        

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