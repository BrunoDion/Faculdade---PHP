<?php 

    include('../models/alunos.php');

    class CadastroAluno{
        private $alunos = [];

        public function CadastrarAluno($nome,$matricula,$curso,$password){
            $aluno = new Aluno($nome,$matricula,$curso,$password);
            $this->alunos[] = $aluno;
        }
        public function getAlunos(){
            return $this->alunos;
        }
        
    }

    $aluno1 = new CadastroAluno();
    $aluno1->CadastrarAluno("Bruno", 2 , "Medicina", 1234);

    var_dump($aluno1);





?>