<?php 

    require_once 'Instrutor.php';

    class CrudInstrutor extends Instrutor{

        protected $tabela= 'instrutor';

        public function ifExist($cpf){
            $sql="SELECT  a.cpf_aluno,i.cpf_instrutor 
            FROM aluno as a, instrutor as i where a.cpf_aluno=:cpf_aluno OR cpf_instrutor=:cpf_instrutor limit 1";
            $stm=DB::prepare($sql);
            $stm->bindParam(':cpf_aluno',$cpf);
            $stm->bindParam(':cpf_instrutor',$cpf);
            $stm->execute();
            return $stm->fetch();
        }
        public function findFkLogin(){
            $cpf_instrutor=$this->getCpf_instrutor();
            $sql="SELECT  fk_login 
            FROM instrutor  where cpf_instrutor=:cpf_instrutor";
            $stm=DB::prepare($sql);
            $stm->bindParam(':cpf_instrutor',$cpf_instrutor);
            $stm->execute();
            return $stm->fetch();
        }
        public function findData(){
            $sql="SELECT  i.nome, l.usuario,l.senha, c.email, c.telefone, i.dt_nascimento, i.cpf_instrutor 
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
        public function update($cpf_instrutor){
            $nome=$this->getNome();
            $dt_nascimento=$this->getDt_nascimento();         
            $sql="UPDATE $this->tabela SET  nome= :nome, dt_nascimento=:dt_nascimento WHERE cpf_instrutor= :cpf_instrutor";
            $stm=DB::prepare($sql);
            $stm->bindParam(':cpf_instrutor',$cpf_instrutor);
            $stm->bindParam(':nome',$nome);
            $stm->bindParam(':dt_nascimento',$dt_nascimento);
            return $stm->execute();
        }

        public function delete($cpf_instrutor){
            $sql="DELETE FROM contato where cpf_instrutor= :cpf_instrutor";
            $sql2="DELETE FROM $this->tabela WHERE cpf_instrutor= :cpf_instrutor";
            $sql3="DELETE FROM login where id_login=(SELECT fk_login from instrutor where cpf_instrutor= :cpf_instrutor)";
         
            $stm=DB::prepare($sql);
            $stm2=DB::prepare($sql2);
            $stm3=DB::prepare($sql3);

            $stm->bindParam(':cpf_instrutor',$cpf_instrutor);
            $stm2->bindParam(':cpf_instrutor',$cpf_instrutor);
            $stm3->bindParam(':cpf_instrutor',$cpf_instrutor);
            $stm->execute();
            $stm2->execute();
            return $stm3->execute();
        }
    }


?>