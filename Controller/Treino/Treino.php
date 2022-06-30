<?php

    require_once '../../BD/DB.php';

    class Treino extends DB{                      

        protected $tabela;
        private $id_treino;
        private $nome_treino;
        private $dt_treino;
        private $fk_fichaExercicio;
        private $cpf_aluno;
        private $cpf_instrutor;

        
        public function setNome_treino($nome_treino){
            $this->nome_treino=$nome_treino;
        }
        public function getNome_treino(){
            return $this->nome_treino;
        }
        public function setId_treino($id_treino){
            $this->id_treino=$id_treino;
        }
        public function getId_treino(){
            return $this->id_treino;
        }
        public function setDt_treino($dt_treino){
            $this->dt_treino=$dt_treino;
        }
        public function getDt_treino(){
            return $this->dt_treino;
        }
        public function setFkfichaExercicio($fkfichaExercicio){
            $this->fkfichaExercicio=$fkfichaExercicio;
        }
        public function getFkfichaExercicio(){
            return $this->fkfichaExercicio;
        }
        public function setCpf_aluno($cpf_aluno){
            $this->cpf_aluno=$cpf_aluno;
        }
        public function getCpf_aluno(){
            return $this->cpf_aluno;
        }
        public function setCpf_instrutor($cpf_instrutor){
            $this->cpf_aluno=$cpf_aluno;
        }
        public function getCpf_instrutor(){
            return $this->cpf_instrutor;
        }
    }
?>