<?php

    require_once '../../BD/DB.php';

    class Exercicio extends DB{

        protected $tabela;
        private $id_exercicio;
        private $nome;
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
        public function setDescricao($descricao){
            $this->descricao=$descricao;
        }
        public function getDescricao(){
            return $this->descricao;
        }
    }
?>