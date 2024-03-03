<?php 

    include('src/models/alunos.php');

    class CadastroAluno{
        private $alunos = [];

        public function CadastrarAluno($nome,$matricula,$curso,$password){
            $aluno = new Aluno($nome,$matricula,$curso,$password);
            array_push($this->alunos,$aluno);
        }
        public function getAlunos(){
            return $this->alunos;
        }

        
        
    }

?>