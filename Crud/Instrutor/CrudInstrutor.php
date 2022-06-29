<?php 

    require_once 'Instrutor.php';

    class CrudInstrutor extends Instrutor{

        protected $tabela= 'instrutor';

        //find all
        public function findAll(){
            $sql="SELECT * FROM $this->tabela";
            $stm=DB::prepare($sql);
            $stm->execute();
            return $stm->fetchAll();
        }

        //insert 
        public function insert(){
            $cpf_instrutor=$this->getCpf_instrutor();
            $nome=$this->getNome();
            $dt_nascimento=$this->getDt_nascimento();
            $fk_login=$this->getFk_login();
            $sql="INSERT INTO $this->tabela (cpf_instrutor,nome,dt_nascimento,fk_login) VALUES (:cpf_instrutor,:nome,:dt_nascimento,:fk_login)";
            $stm=DB::prepare($sql);
            $stm->bindParam(':cpf_instrutor',$cpf_instrutor);
            $stm->bindParam(':nome',$nome);
            $stm->bindParam(':dt_nascimento',$dt_nascimento);
            $stm->bindParam(':fk_login',$fk_login);
            return $stm->execute();
        }
        // public function update($id){
        //     $usuario=$this->getUsuario();
        //     $senha=$this->getSenha();           
        //     $sql="UPDATE $this->tabela SET usuario= :usuario, senha= :senha WHERE id = :id";
        //     $stm=DB::prepare($sql);
        //     $stm->bindParam(':id',$id,PDO::PARAM_INT);
        //     $stm->bindParam(':usuario',$usuario);
        //     $stm->bindParam(':senha',$senha);
        //     return $stm->execute();
        // }
        public function delete($id){
            $sql="DELETE FROM $this->tabela WHERE id= :id";
            $stm=DB::prepare($sql);
            $stm->bindParam(':id',$id,PDO::PARAM_INT);
            return $stm->execute();
        }
    }


?>