<?php 

    require_once 'Login.php';

    class CrudLogin extends Login{

        protected $tabela= 'login';

        public function getIdLogin(){
            $usuario=$this->getUsuario();
            $sql="SELECT id_login from login where usuario=:usuario";
            $stm=DB::prepare($sql);
            $stm->bindParam(':usuario',$usuario);
            $stm->execute();
            return $stm->fetch();
        }
        // find one
        public function findOne(){
            $usuario=$this->getUsuario();
            $sql="SELECT usuario, senha FROM $this->tabela WHERE usuario=:usuario";
            $stm=DB::prepare($sql);
            $stm->bindParam(':usuario',$usuario);
            $stm->execute();
            return $stm->fetch();
        }
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
            $sql="UPDATE $this->tabela SET usuario= :usuario WHERE id_login = :id";
            $stm=DB::prepare($sql);
            $stm->bindParam(':id',$id);
            $stm->bindParam(':usuario',$usuario);
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