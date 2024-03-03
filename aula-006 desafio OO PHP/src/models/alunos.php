<?php 

    class Aluno{
        private $nome;
        private $matricula;
        private $curso;
        private $password;

        public function __construct($nome,$matricula,$curso,$password){
            $this->nome = $nome;
            $this->matricula = $matricula;
            $this->curso = $curso;
            $this->password = password_hash($password, PASSWORD_DEFAULT);
        }

        public function getNome(){
            return $this->nome;
        }

        public function getMatricula(){
            return $this->matricula;
        }

        public function getCurso(){
            return $this->curso;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function setMatricula($matricula){
            $this->matricula = $matricula;
        }

        public function setCurso($curso){
            $this->curso = $curso;
        }

        public function verificarSenha($password){
            return password_verify($password, $this->password);
        }

    }



?>