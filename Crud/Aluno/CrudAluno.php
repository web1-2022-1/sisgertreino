<?php 

    require_once 'Aluno.php';

    class CrudLogin extends Aluno{

        protected $tabela= 'aluno';

        //find all
        public function findAll(){
            $sql="SELECT * FROM $this->tabela";
            $stm=DB::prepare($sql);
            $stm->execute();
            return $stm->fetchAll();
        }

        //insert 
        public function insert(){
            $cpf_aluno=$this->getCpf_aluno();
            $nome=$this->getNome();
            $dt_nascimento=$this->getDt_nascimento();
            $fk_login=$this->getFk_login();
            $sql="INSERT INTO $this->tabela (cpf_aluno,nome,dt_nascimento,fk_login) VALUES (:cpf_aluno,:nome,:dt_nascimento,:fk_login)";
            $stm=DB::prepare($sql);
            $stm->bindParam(':cpf_aluno',$cpf_aluno);
            $stm->bindParam(':nome',$nome);
            $stm->bindParam(':dt_nascimento',$dt_nascimento);
            $stm->bindParam(':fk_login',$fk_login);
            return $stm->execute();
        }
        public function update($id){
            $cpf_aluno=$this->getCpf_aluno();
            $nome=$this->getNome();
            $dt_nascimento=$this->getDt_nascimento();
            $fk_login=$this->getFk_login();          
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