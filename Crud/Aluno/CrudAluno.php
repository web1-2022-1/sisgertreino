<?php 

    require_once 'Aluno.php';

    class CrudAluno extends Aluno{

        protected $tabela= 'aluno';

        public function findData(){
            $sql="SELECT  a.nome, c.email, c.telefone, a.dt_nascimento, a.cpf_aluno 
            FROM aluno  as a, contato as c
            where c.cpf_aluno=a.cpf_aluno";
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
            $cpf_aluno=$this->getCpf_aluno();
            $nome=$this->getNome();
            $dt_nascimento=$this->getDt_nascimento();
            $sql="INSERT INTO $this->tabela (cpf_aluno,nome,dt_nascimento) VALUES (:cpf_aluno,:nome,:dt_nascimento)";
            $stm=DB::prepare($sql);
            $stm->bindParam(':cpf_aluno',$cpf_aluno);
            $stm->bindParam(':nome',$nome);
            $stm->bindParam(':dt_nascimento',$dt_nascimento);
            return $stm->execute();
        }
        public function update($id){
            $cpf_aluno=$this->getCpf_aluno();
            $nome=$this->getNome();
            $dt_nascimento=$this->getDt_nascimento();         
            $sql="UPDATE $this->tabela SET cpf_aluno= :cpf_aluno, nome= :nome dt_nascimento=:dt_nascimento WHERE cpf_aluno= :cpf_aluno";
            $stm=DB::prepare($sql);
            $stm->bindParam(':cpf_aluno',$cpf_aluno);
            $stm->bindParam(':nome',$nome);
            $stm->bindParam(':dt_nascimento',$dt_nascimento);
            return $stm->execute();
        }
        public function delete($id){
            $sql="DELETE FROM $this->tabela WHERE cpf_aluno= :cpf_aluno";
            $stm=DB::prepare($sql);
            $stm->bindParam(':cpf_aluno',$cpf_aluno);
            return $stm->execute();
        }
    }


?>