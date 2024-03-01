<?php 

session_start();

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .card-login{
            padding: 30px 0 0 0;
            width: 350px;
            margin: 0 auto;
        }
    </style>
    <title>Chamado Real</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a href="#" class="navbar-brand">
            <img src="logo.png" width="30px" height="30px" class="d-inline-block align-top">
            Chamado Real
        </a>
    </nav>
    <div class="row">
        <div class="card-login">
            <div class="card">
                <div class="card-header">
                    Login
                </div>
                <div class="card-body">
                    <form action="valida_login.php" method="post">
                        <div class="form-group">
                            <input name="email" type="email" class="form-control" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <input name="senha" type="password" class="form-control" placeholder="Senha">
                        </div>
                        <?php if (isset($_GET['login']) && $_GET['login'] == 'erro') { ?>
                        <div class="text-danger">
                            Usuário ou senha inválido(s)
                        </div>
                        <?php } ?>
                        <button class="btn btn-lg btn-info btn-block" type="submit">
                            Entrar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>