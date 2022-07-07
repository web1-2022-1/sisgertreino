<?php 

    require_once 'FichaExercicio.php';

    class CrudFichaExercicio extends fichaExercicio{

        protected $tabela= 'fichaExercicio';

        public function findName($id){
            $sql="SELECT nome_ficha FROM $this->tabela where id_fichaExercicio=:id_fichaExercicio";
            $stm=DB::prepare($sql);
            $stm->bindParam(':id_fichaExercicio',$id);
            $stm->execute();
            return $stm->fetch();
        }

        public function findAll(){
            $sql="SELECT * FROM $this->tabela";
            $stm=DB::prepare($sql);
            $stm->execute();
            return $stm->fetchAll();
        }
        
        public function insert(){
            
            $nome_ficha=$this->getNomeFicha();
            $num_serie=$this->getNum_serie();
            $repeticoes=$this->getRepeticoes();
            $carga=$this->getCarga();
            $tempo_descanso=$this->getTempo_descanso();
            $fk_exercicio=$this->getFk_exercicio();
            $fk_treino=$this->getFk_treino();

            $sql="INSERT INTO $this->tabela (nome_ficha, num_serie,repeticoes,carga,tempo_descanso,fk_exercicio, fk_treino) 
            VALUES (:nome_ficha, :num_serie,:repeticoes,:carga,:tempo_descanso,:fk_exercicio, :fk_treino)";
            $stm=DB::prepare($sql);
            $stm->bindParam(':nome_ficha',$nome_ficha);
            $stm->bindParam(':num_serie',$num_serie);
            $stm->bindParam(':repeticoes',$repeticoes);
            $stm->bindParam(':carga',$carga);
            $stm->bindParam(':tempo_descanso',$tempo_descanso);
            $stm->bindParam(':fk_exercicio',$fk_exercicio);
            $stm->bindParam(':fk_treino',$fk_treino);
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
            $sql="DELETE FROM $this->tabela WHERE id_= :id_fichaExercicio";
            $stm=DB::prepare($sql);
            $stm->bindParam(':id',$id_exercicio,PDO::PARAM_INT);
            return $stm->execute();
        }
    }
?>