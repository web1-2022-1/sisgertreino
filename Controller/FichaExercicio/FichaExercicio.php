<?php

    require_once '../../BD/DB.php';

    class FichaExercicio extends DB{

        protected $tabela;       
        private $nomeFicha;
        private $num_serie;
        private $repeticoes;
        private $carga;
        private $tempo_descanso;
        private $fk_exercicio;
        private $fk_treino;

  
        public function setNomeFicha($nomeFicha){
            $this->nomeFicha=$nomeFicha;
        }
        public function getNomeFicha(){
            return $this->nomeFicha;
        }
        public function setNum_serie($num_serie){
            $this->num_serie= $num_serie;
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
        public function setFk_exercicio($fk_exercicio){
            $this->fk_exercicio=$fk_exercicio;
        }
        public function getFk_exercicio(){
            return $this->fk_exercicio;
        }
        public function setFk_treino($fk_treino){
            $this->fk_treino=$fk_treino;
        }
        public function getFk_treino(){
            return $this->fk_treino;
        }
    }

?>