<?php

    require_once '../../BD/DB.php';

    class Instrutor extends DB{

        protected $tabela;
        private $cpf_instrutor;
        private $nome;
        private $dt_nascimento;
        private $fk_login;

        public function setCpf_instrutor($cpf_instrutor){
            $this->cpf_instrutor=$cpf_instrutor;
        }
        public function getCpf_instrutor(){
            return $this->cpf_instrutor;
        }
       
        public function setNome($nome){
            $this->nome=$nome;
        }
        public function getNome(){
            return $this->nome;
        }
        public function setDt_nascimento($dt_nascimento){
            $this->dt_nascimento=$dt_nascimento;
        }
        public function getDt_nascimento(){
            return $this->dt_nascimento;
        }
        public function setFk_login($fk_login){
            $this->fk_login=$fk_login;
        }
        public function getFk_login(){
            return $this->fk_login;
        }
    }
?>