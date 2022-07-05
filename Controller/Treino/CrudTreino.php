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
            $nome_treino=$this->getNome_treino();
            $dt_treino=$this->getDt_treino();
            $cpf_aluno=$this->getCpf_aluno();
            $sql="INSERT INTO $this->tabela (nome_treino,dt_treino,cpf_aluno)
             VALUES (:nome_treino,:dt_treino,:cpf_aluno)";
            $stm=DB::prepare($sql);
            $stm->bindParam(':nome_treino',$nome_treino);
            $stm->bindParam(':dt_treino',$dt_treino);
            $stm->bindParam(':cpf_aluno',$cpf_aluno);
            return $stm->execute();
        }
        
        public function update($id_treino){
            $nome_treino=$this->getNome_treino();
            $dt_treino=$this->getDt_treino();
            $cpf_aluno=$this->getCpf_aluno();
            $sql="UPDATE $this->tabela SET  nome_treino= :nome_treino, dt_treino=:dt_treino,
            cpf_aluno=:cpf_aluno
            WHERE id_treino = :id_treino";
            $stm=DB::prepare($sql);
            $stm->bindParam(':id_treino',$id_treino);
            $stm->bindParam(':nome_treino',$nome_treino);
            $stm->bindParam(':dt_treino',$dt_treino);
            $stm->bindParam(':cpf_aluno',$cpf_aluno);
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