<?php 

    require_once 'Exercicio.php';

    class CrudExercicio extends Exercicio{

        protected $tabela= 'exercicio';


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
        /*public function update($id){
            $usuario=$this->getUsuario();
            $senha=$this->getSenha();           
            $sql="UPDATE $this->tabela SET usuario= :usuario, senha= :senha WHERE id = :id";
            $stm=DB::prepare($sql);
            $stm->bindParam(':id',$id,PDO::PARAM_INT);
            $stm->bindParam(':usuario',$usuario);
            $stm->bindParam(':senha',$senha);
            return $stm->execute();
        }*/
        public function delete($id_exercicio){
            $sql="DELETE FROM $this->tabela WHERE id_exercicio= :id";
            $stm=DB::prepare($sql);
            $stm->bindParam(':id',$id_exercicio,PDO::PARAM_INT);
            return $stm->execute();
        }
    }
?>