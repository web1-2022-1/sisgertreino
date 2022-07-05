<?php

    require_once '../../BD/DB.php';

    class Treino extends DB{                      

        protected $tabela;
        private $nome_treino;
        private $dt_treino;
        private $cpf_aluno;

        
        public function setNome_treino($nome_treino){
            $this->nome_treino=$nome_treino;
        }
        public function getNome_treino(){
            return $this->nome_treino;
        }
        
        public function setDt_treino($dt_treino){
            $this->dt_treino=$dt_treino;
        }
        public function getDt_treino(){
            return $this->dt_treino;
        }
        
        public function setCpf_aluno($cpf_aluno){
            $this->cpf_aluno=$cpf_aluno;
        }
        public function getCpf_aluno(){
            return $this->cpf_aluno;
        }
        
    }
?>