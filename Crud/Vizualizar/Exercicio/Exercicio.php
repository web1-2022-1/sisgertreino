<?php

    require_once 'DB.php';

    class Exercicio extends DB{

        protected $tabela;
        private $id_exercicio;
        private $nome;
        private $dificuldade;
        private $grupo_muscular;
        private $descricao;

        public function setId_exercicio($id_exercicio){
            $this->id_exercicio=$id_exercicio;
        }
        public function getId_exercicio(){
            return $this->id_exercicio;
        }
       
        public function setNome($nome){
            $this->nome=$nome;
        }
        public function getNome(){
            return $this->nome;
        }
        public function setDificuldade($dificuldade){
            $this->dificuldade=$dificuldade;
        }
        public function getDificuldade(){
            return $this->dificuldade;
        }
        public function setGrupo_muscular($grupo_muscular){
            $this->grupo_muscular=$grupo_muscular;
        }
        public function getGrupo_muscular(){
            return $this->grupo_muscular;
        }
        public function setDescricao($descricao){
            $this->descricao=$descricao;
        }
        public function getDescricao(){
            return $this->descricao;
        }
    }
?>