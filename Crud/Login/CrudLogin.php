<?php 

    require_once 'Login.php';

    class CrudLogin extends Login{

        protected $tabela= 'usuario';

        //find all
        public function findAll(){
            $sql="SELECT * FROM $this->tabela";
            $stm=DB::prepare($sql);
            $stm->execute();
            return $stm->fetchAll();
        }

        //insert 
        public function insert(){
            $usuario=$this->getUsuario();
            $senha=$this->getSenha();
            $sql="INSERT INTO $this->tabela (usuario, senha) VALUES (:usuario,:senha)";
            $stm=DB::prepare($sql);
            $stm->bindParam(':usuario',$usuario);
            $stm->bindParam(':senha',$senha);
            return $stm->execute();
        }
        public function update($id){
            $usuario=$this->getUsuario();
            $senha=$this->getSenha();           
            $sql="UPDATE $this->tabela SET usuario= :usuario, senha= :senha WHERE id = :id";
            $stm=DB::prepare($sql);
            $stm->bindParam(':id',$id,PDO::PARAM_INT);
            $stm->bindParam(':usuario',$usuario);
            $stm->bindParam(':senha',$senha);
            return $stm->execute();
        }
        public function delete($id){
            $sql="DELETE FROM $this->tabela WHERE id= :id";
            $stm=DB::prepare($sql);
            $stm->bindParam(':id',$id,PDO::PARAM_INT);
            return $stm->execute();
        }
    }


?>