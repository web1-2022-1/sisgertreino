<?php

    require_once '../../BD/DB.php';

    class Treino extends DB{

        protected $tabela;
        private $id_treino;
        private $nome;
        private $num_serie;
        private $repeticoes;
        private $carga;
        private $tempo_descanso;
        private $observacao_treino;
        private $id_exercicio;
        private $cpf_aluno;
        private $cpf_instrutor;

        public function setCpf_aluno($cpf_aluno){
            $this->cpf_aluno=$cpf_aluno;
        }
        public function getCpf_aluno(){
            return $this->cpf_aluno;
        }
       
        public function setNome($nome){
            $this->nome=$nome;
        }
        public function getNome(){
            return $this->nome;
        }
        public function setId_treino($id_treino){
            $this->id_treino=$id_treino;
        }
        public function getId_treino(){
            return $this->id_treino;
        }
        public function setNum_serie($num_serie){
            $this->num_serie=$num_serie;
        }
        public function getNum_serie(){
            return $this->num_serie;
        }
        public function setRepeticoes($repeticoes){
            $this->repeticoes=$repeticoes;
        }
        public function getRepeticoes(){
            return $this->repeticoes;
        }
        public function setCarga($carga){
            $this->carga=$carga;
        }
        public function getCarga(){
            return $this->carga;
        }
        public function setTempo_descanso($tempo_descanso){
            $this->tempo_descanso=$tempo_descanso;
        }
        public function getTempo_descanso(){
            return $this->tempo_descanso;
        }
        public function setObservacao_treino($observacao_treino){
            $this->Observacao_treino=$observacao_treino;
        }
        public function getObservacao_treino(){
            return $this->observacao_treino;
        }
        public function setId_exercicio($id_exercicio){
            $this->id_exercicio=$id_exercicio;
        }
        public function getId_exercicio(){
            return $this->id_exercicio;
        }
        public function setCpf_instrutor($cpf_instrutor){
            $this->cpf_aluno=$cpf_aluno;
        }
        public function getCpf_instrutor(){
            return $this->cpf_instrutor;
        }
    }