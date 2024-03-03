<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        p{
            color: white;
        }
        h1{
            color: white;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <nav class="navbar bg-body-tertiary" style="background-color: #555;">
    <div class="container-fluid">
        <p class="navbar-brand" href="#">
        <img src="logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
        Students Controll
        </p>
        <h1>Ola <?php echo $_SESSION['login'] ?></h1>
    </div>
    </nav>

   
    <div style="display: flex;gap: 250px">
        <form action="" method="post">
            <input type="text" name="newLogin" placeholder="Cadastre seu Nome">
            <input type="text" name="newMatricula" placeholder="Numero de sua matricula">
            <input type="text" name="newCurso" placeholder="Informe seu Curso">
            <input type="password" name="newPassword" placeholder="Digite sua senha">
            <input type="submit" name="enviar" value="Cadastrar">
        </form>
    </div>
        
</body>

</html>