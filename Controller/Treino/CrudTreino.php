<?php 

    require_once 'Treino.php';

    class CrudTreino extends Treino{

        protected $tabela= 'treino';

        //find all
        public function findAll(){
            $sql="SELECT * FROM $this->tabela";
            $stm=DB::prepare($sql);
            $stm->execute();
            return $stm->fetchAll();
        }
        
        public function insert(){
            $id_treino=$this->getId_treino();
            $nome_treino=$this->getNome_treino();
            $dt_treino=$this->getDt_treino();
            $fk_fichaExercicio=$this->getFk_fichaExercicio();
            $cpf_aluno=$this->getCpf_aluno();
            $cpf_instrutor=$this->getCpf_instrutor();
            $sql="INSERT INTO $this->tabela (id_treino,nome_treino,dt_treino,fk_fichaExercicio,cpf_aluno,cpf_instrutor)
             VALUES (:id_treino,:nome_treino,:dt_treino,:fk_fichaExercicio,:cpf_aluno,:cpf_instrutor)";
            $stm=DB::prepare($sql);
            $stm->bindParam(':id_treino',$id_treino);
            $stm->bindParam(':nome_treino',$nome_treino);
            $stm->bindParam(':dt_treino',$dt_treino);
            $stm->bindParam(':fk_fichaExercicio',$fk_fichaExercicio);
            $stm->bindParam(':cpf_aluno',$cpf_aluno);
            $stm->bindParam(':cpf_instrutor',$cpf_instrutor);
            return $stm->execute();
        }
        
        public function update($id_treino){
            $id_treino=$this->getId_treino();
            $nome_treino=$this->getNome_treino();
            $dt_treino=$this->getDt_treino();
            $fk_fichaExercicio=$this->getFk_fichaExercicio();
            $cpf_aluno=$this->getCpf_aluno();
            $cpf_instrutor=$this->getCpf_instrutor();
            $sql="UPDATE $this->tabela SET id_treino= :id_treino, nome_treino= :nome_treino, dt_treino=:dt_treino,
            fk_fichaExercicio=:fk_fichaExercicio, cpf_aluno=:cpf_aluno, cpf_instrutor=:cpf_instrutor
             WHERE id_treino = :id_treino";
            $stm=DB::prepare($sql);
            $stm->bindParam(':id_treino',$id_treino);
            $stm->bindParam(':nome_treino',$nome_treino);
            $stm->bindParam(':dt_treino',$dt_treino);
            $stm->bindParam(':fk_fichaExercicio',$fk_fichaExercicio);
            $stm->bindParam(':cpf_aluno',$cpf_aluno);
            $stm->bindParam(':cpf_instrutor',$cpf_instrutor);
            return $stm->execute();
        }

        public function delete($id_treino){
            $sql="DELETE FROM $this->tabela WHERE id_treino= :id";
            $stm=DB::prepare($sql);
            $stm->bindParam(':id',$id_treino,PDO::PARAM_INT);
            return $stm->execute();
        }
    }


?>