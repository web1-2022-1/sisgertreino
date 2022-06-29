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
            $telefone=$this->getTelefone();
            $email=$this->getEmail();
            $cpf_aluno=$this->getCpf_aluno();
            $cpf_instrutor= $this->getCpf_instrutor();
            $sql="INSERT INTO $this->tabela (telefone,email,cpf_aluno, cpf_instrutor) VALUES (:telefone,:email,:cpf_aluno, :cpf_instrutor)";
            $stm=DB::prepare($sql);
            $stm->bindParam(':telefone',$telefone);
            $stm->bindParam(':email',$email);
            $stm->bindParam(':cpf_aluno',$cpf_aluno);
            $stm->bindParam(':cpf_instrutor',$cpf_instrutor);
            return $stm->execute();
        }
        public function update($id){
            $id_contato=$this->getId_contato();
            $telefone=$this->getTelefone();
            $email=$this->getEmail();
            $cpf_aluno=$this->getCpf_aluno();
            $cpf_instrutor= $this->getCpf_instrutor();
            $sql="UPDATE $this->tabela SET telefone=:telefone, email=:email, cpf_aluno=:cpf_aluno, cpf_instrutor:cpf_instrutor WHERE id = :id_contato";
            $stm=DB::prepare($sql);
            $stm->bindParam(':id_contato',$id_contato);
            $stm->bindParam(':telefone',$telefone);
            $stm->bindParam(':email',$email);
            $stm->bindParam(':cpf_aluno',$cpf_aluno);
            $stm->bindParam(':cpf_instrutor',$cpf_instrutor);
            return $stm->execute();
        }
        public function delete($id){
            $sql="DELETE FROM $this->tabela WHERE id= :id_contato";
            $stm=DB::prepare($sql);
            $stm->bindParam(':id_contato',$id_contato);
            return $stm->execute();
       
    } 
}


?>