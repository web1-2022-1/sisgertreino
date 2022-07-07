<?php 

    require_once 'Treino.php';

    class CrudTreino extends Treino{

        protected $tabela= 'treino';

        public function findId(){
            $nome_treino=$this->getNome_treino();
            $cpf_aluno=$this->getCpf_aluno();
            $sql="SELECT id_treino FROM $this->tabela WHERE nome_treino=:nome_treino AND cpf_aluno=:cpf_aluno";
            $stm=DB::prepare($sql);
            $stm->bindParam(':nome_treino',$nome_treino);
            $stm->bindParam(':cpf_aluno',$cpf_aluno);
            $stm->execute();
            return $stm->fetch();
        }

        public function findTreinoAluno(){
            $cpf_aluno=$this->getCpf_aluno();
            $sql="SELECT * FROM $this->tabela where cpf_aluno=:cpf_aluno";
            $stm=DB::prepare($sql);
            $stm->bindParam(':cpf_aluno',$cpf_aluno);
            $stm->execute();
            return $stm->fetchAll();
        }

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
            $sql="UPDATE $this->tabela SET  nome_treino=:nome_treino, dt_treino=:dt_treino
            WHERE id_treino =:id_treino";
            $stm=DB::prepare($sql);
            $stm->bindParam(':id_treino',$id_treino);
            $stm->bindParam(':nome_treino',$nome_treino);
            $stm->bindParam(':dt_treino',$dt_treino);
            return $stm->execute();
        }

        public function delete($id_treino){
            $sql="DELETE FROM $this->tabela WHERE id_treino= :id";
            $stm=DB::prepare($sql);
            $stm->bindParam(':id',$id_treino,PDO::PARAM_INT);
            return $stm->execute();
        }
        public function deleteCascade($id_treino){
            $sql="DELETE FROM $this->tabela WHERE id_treino= :id";
            $stm=DB::prepare($sql);
            $stm->bindParam(':id',$id_treino,PDO::PARAM_INT);
            $this->deleteFicha($id_treino);
            return $stm->execute();
        }
        private function deleteFicha($id_treino){
            $sql="DELETE FROM fichaExercicio WHERE fk_treino=:id_treino";
            $stm=DB::prepare($sql);
            $stm->bindParam(':id_treino',$id_treino,PDO::PARAM_INT);
            return $stm->execute();
        }
    }


?>