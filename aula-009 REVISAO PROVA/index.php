<?php
        class Estudante {
        private $id;
        private $nome;
        private $idade;
        private $curso;
        public function __construct($nome, $idade, $curso) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->curso = $curso;
        }
        public function getId() {
        return $this->id;

        }
        public function getNome() {
        return $this->nome;
        }
        public function getIdade() {
        return $this->idade;
        }
        public function getCurso() {
        return $this->curso;
        }
        public function set($atributo, $valor){
            $this->$atributo = $valor; 
        }
        }
        class Escola {
        private $estudantes;
        public function __construct() {
        $this->estudantes = [];
        }
        public function adicionarEstudante(Estudante $estudante) {
        // Implemente a lógica para adicionar um estudante à lista de estudantes
            $estudante->set('id', count($this->estudantes));
            array_push($this->estudantes, $estudante);
        }
        public function listarEstudantes() {
        // Implemente a lógica para listar todos os estudantes
            print_r($this->estudantes);
        }
        public function atualizarEstudante($id, $nome, $idade, $curso) {
        // Implemente a lógica para atualizar as informações de um estudante
            foreach ($this->estudantes as $key => $value) {
                if($value->getId() == $id){
                    $this->estudantes[$key]->set('nome', $nome);
                    $this->estudantes[$key]->set('idade', $idade);
                    $this->estudantes[$key]->set('curso', $curso);
                }
            }
        }
        public function removerEstudante($id) {
        // Implemente a lógica para remover um estudante da lista
            foreach ($this->estudantes as $key => $value) {
                if($value->getId() == $id){
                    array_splice($this->estudantes, $key, 1);
                }
            }
        }

        }
        // Exemplo de uso
        $escola = new Escola();
        $estudante1 = new Estudante("João", 18, "Engenharia de Software");
        $escola->adicionarEstudante($estudante1);
        $estudante2 = new Estudante("Bruno", 20, "Engenharia Elétrica");
        $escola->adicionarEstudante($estudante2);
        echo "<pre>";
        $escola->listarEstudantes();
        echo "</pre>";
        $escola->atualizarEstudante(1, 'Breno', 20, 'Engenharia Mecanica');
        echo "<hr>";
        echo "<pre>";
        $escola->listarEstudantes();
        echo "</pre>";
        $escola->removerEstudante(1);
        echo "<hr>";
        echo "<pre>";
        $escola->listarEstudantes();
        echo "</pre>";



?>