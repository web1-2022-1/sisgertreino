<?php 

    require_once 'Exercicio.php';

    class CrudExercicio extends Exercicio{

        protected $tabela= 'exercicio';

        public function findData($id_exercicio){
            $sql="SELECT nome, descricao FROM $this->tabela WHERE id_exercicio=:id_exercicio";
            $stm=DB::prepare($sql);
            $stm->bindParam(':id_exercicio',$id_exercicio);
            $stm->execute();
            return $stm->fetch();
        }

        public function findId(){
            $nome_exercicio=$this->getNome();
            $sql="SELECT id_exercicio FROM $this->tabela WHERE nome=:nome";
            $stm=DB::prepare($sql);
            $stm->bindParam(':nome',$nome_exercicio);
            $stm->execute();
            return $stm->fetch();
        }

        public function findAll(){
            $sql="SELECT * FROM $this->tabela";
            $stm=DB::prepare($sql);
            $stm->execute();
            return $stm->fetchAll();
        }
        
        public function insert(){
            
            $nome=$this->getNome();
            $descricao=$this->getDescricao();
            $sql="INSERT INTO $this->tabela (nome, descricao) VALUES (:nome,:descricao)";
            $stm=DB::prepare($sql);
            $stm->bindParam(':nome',$nome);
            $stm->bindParam(':descricao',$descricao);
            return $stm->execute();
        } 
        
        public function delete($id_exercicio){
            $sql="DELETE FROM $this->tabela WHERE id_exercicio= :id";
            $stm=DB::prepare($sql);
            $stm->bindParam(':id',$id_exercicio,PDO::PARAM_INT);
            return $stm->execute();
        }
    }
?>