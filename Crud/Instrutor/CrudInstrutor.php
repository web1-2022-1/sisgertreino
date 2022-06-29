<?php 

    require_once 'Instrutor.php';

    class CrudInstrutor extends Instrutor{

        protected $tabela= 'instrutor';

        public function findData(){
            $sql="SELECT  i.nome, l.usuario, c.email, c.telefone, i.dt_nascimento, i.cpf_instrutor 
            FROM instrutor  as i, login as l, contato as c
            where l.id_login=i.fk_login AND c.cpf_instrutor=i.cpf_instrutor";
            $stm=DB::prepare($sql);
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
        //     $cpf_instrutor=$this->getCpf_instrutor();
        //     $nome=$this->getNome();
        //     $dt_nascimento=$this->getDt_nascimento();         
        //     $sql="UPDATE $this->tabela SET cpf_instrutor= :cpf_instrutor, nome= :nome dt_nascimento=:dt_nascimento WHERE cpf_instrutor= :cpf_instrutor";
        //     $stm=DB::prepare($sql);
        //     $stm->bindParam(':cpf_instrutor',$cpf_instrutor);
        //     $stm->bindParam(':nome',$nome);
        //     $stm->bindParam(':dt_nascimento',$dt_nascimento);
        //     return $stm->execute();
        // }
        // public function delete($id){
        //     $sql="DELETE FROM $this->tabela WHERE cpf_instrutor= :cpf_instrutor";
        //     $stm=DB::prepare($sql);
        //     $stm->bindParam(':cpf_instrutor',$cpf_instrutor);
        //     return $stm->execute();
        // }
    }


?>