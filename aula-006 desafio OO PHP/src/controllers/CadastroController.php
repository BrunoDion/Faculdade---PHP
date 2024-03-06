<?php 

    include('src/models/alunos.php');

    class CadastroAluno{
        

        public function CadastrarAluno($nome,$matricula,$curso,$password){
            $aluno = new Aluno($nome,$matricula,$curso,$password);
            $pdo = new PDO("mysql:host=localhost;dbname=alunos", "root", "");
            $sql = $pdo->prepare("insert into aluno(nome, matricula, curso, password) values(?,?,?,?)");
            $sql->execute([$nome,$matricula,$curso,$password]);
        }
        public function getAlunos(){
            $pdo = new PDO("mysql:host=localhost;dbname=alunos", "root", "");
            $sql = $pdo->prepare("select * from aluno");
            $sql->execute();
            return $sql->fetchAll();
        }
        public function editarCadastro($nome,$matricula,$curso,$password,$id){
            $pdo = new PDO("mysql:host=localhost;dbname=alunos", "root", "");
            $sql = $pdo->prepare("update aluno set nome = ?, matricula = ?, curso = ?, password = ? WHERE id = ?");
            $sql->execute([$nome,$matricula,$curso,$password,$id]);
        }

        
        
    }

?>