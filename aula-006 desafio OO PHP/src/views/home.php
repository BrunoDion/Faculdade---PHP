<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </style>
    <title>Students Controll</title>
</head>

<body>
    <nav class="navbar bg-body-tertiary" style="background-color: #454545;">
    <div class="container-fluid">
        <p class="navbar-brand" href="#">
        <img src="logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
        Students Controll
        </p>
        <h1>Ola <?php echo $_SESSION['login'] ?></h1>
    </div>
    </nav>

    <div class="container">
        <div class="grid">
            <div class="card">

            </div>
        </div>
    </div>
   
    <div style="display: flex;gap: 250px">
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>matricula</th>
                    <th>Curso</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                $info = $CC->getAlunos();
                foreach ($info as $key => $value) {
                    
                    ?>
                        <tr>
                            <th><?php echo $value['nome'] ?></th>
                            <th><?php echo $value['matricula'] ?></th>
                            <th><?php echo $value['curso'] ?></th>
                            <th><a href="index.php?pagina=Edit&id=<?php echo  $value['id']?>">Editar</a></th>
                        </tr>
                    <?php 
                }
            ?>
            </tbody>
        </table>
    </div>
    <div>

    </div>
        
</body>

</html>