<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>va caga</title>
</head>
<body>
    <?php 
        if(isset($_GET['id'])){
            $pdo = new PDO("mysql:host=localhost;dbname=alunos", "root", "");
            $sql = $pdo->prepare("select * from aluno where id=?");
            $sql->execute([$_GET['id']]);
            $info = $sql->fetchAll(); 
            ?>
            <form action="" method="post">
                <input type="hidden" name="id" value="<?php echo $info[0]["id"]?>">
                <input type="text" name="nome" value="<?php echo $info[0]["nome"]?>">
                <br>
                <input type="text" name="matricula" value="<?php echo $info[0]["matricula"]?>">
                <br>
                <input type="text" name="curso" value="<?php echo $info[0]["curso"]?>">
                <br>
                <input type="password" name="password">
                <br>
                <input name="Editar" type="submit" value="Editar">
            </form>


        <?php }
        else{
            echo "sem Id";
        }
    ?>
    <a href="index.php?pagina=home">voltar</a>
</body>
</html>