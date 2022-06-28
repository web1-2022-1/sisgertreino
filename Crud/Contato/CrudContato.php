<?php 

    require_once 'Contato.php';

    class CrudContato extends Contato{

        protected $tabela= 'contato';

        //find all
        public function findAll(){
            $sql="SELECT * FROM $this->tabela";
            $stm=DB::prepare($sql);
            $stm->execute();
            return $stm->fetchAll();
        }

        //insert 
        
        public function insert(){
            $id_contato=$this->getId_contato();
            $telefone=$this->getTelefone();
            $email=$this->getEmail();
            $cpf_aluno=$this->getCpf_aluno();
            $cpf_instrutor= $this->getCpf_instrutor();
            $sql="INSERT INTO $this->tabela (id_contato,telefone,email,cpf_aluno,cpf_instrutor) VALUES (:id_contato,:telefone,:email,:cpf_aluno,:cpf_instrutor)";
            $stm=DB::prepare($sql);
            $stm->bindParam(':id_contato',$id_contato);
            $stm->bindParam(':telefone',$telefone);
            $stm->bindParam(':email',$email);
            $stm->bindParam(':cpf_aluno',$cpf_aluno);
            $stm->bindParam(':cpf_instrutor',$cpf_instrutor);
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
        }
        public function delete($id){
            $sql="DELETE FROM $this->tabela WHERE id= :id";
            $stm=DB::prepare($sql);
            $stm->bindParam(':id',$id,PDO::PARAM_INT);
            return $stm->execute();
        }*/
    }


?>