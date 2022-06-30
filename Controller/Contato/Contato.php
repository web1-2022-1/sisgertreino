<?php

    require_once '../../BD/DB.php';

    class Contato{

        protected $tabela;
        private $telefone;
        private $email;
        private $cpf_aluno;
        private $cpf_instrutor;

        public function setId_contato($id_contato){
            $this->id_contato=$id_contato;
        }
       
        public function setTelefone($telefone){
            $this->telefone=$telefone;
        }
        public function getTelefone(){
            return $this->telefone;
        }
        public function setEmail($email){
            $this->email=$email;
        }
        public function getEmail(){
            return $this->email;
        }
        public function setCpf_aluno($cpf_aluno){
            $this->cpf_aluno=$cpf_aluno;
        }
        public function getCpf_aluno(){
            return $this->cpf_aluno;
        }
        public function setCpf_instrutor($cpf_instrutor){
            $this->cpf_instrutor=$cpf_instrutor;
        }
        public function getCpf_instrutor(){
            return $this->cpf_instrutor;
        }
    }
?>