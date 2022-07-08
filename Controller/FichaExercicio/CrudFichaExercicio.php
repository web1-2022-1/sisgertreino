<?php 

    require_once 'FichaExercicio.php';

    class CrudFichaExercicio extends fichaExercicio{

        protected $tabela= 'fichaExercicio';

        public function findData($nome_ficha,$id_treino){
            $sql="SELECT f.id_fichaExercicio, e.nome, f.num_serie, f.repeticoes, f.carga, f.tempo_descanso,f.fk_exercicio 
            FROM exercicio as e, fichaExercicio as f 
            WHERE e.id_exercicio=f.fk_exercicio AND f.nome_ficha=:nome_ficha 
            AND f.fk_treino=(select  id_treino from treino where id_treino=:id_treino)";
            $stm=DB::prepare($sql);
            $stm->bindParam(':id_treino',$id_treino);
            $stm->bindParam(':nome_ficha',$nome_ficha);
            $stm->execute();
            return $stm->fetchAll();
        }
        public function findFichas($fk_treino){
            $sql="SELECT f.nome_ficha FROM fichaExercicio as f 
            WHERE  fk_treino=:fk_treino group by nome_ficha";
            $stm=DB::prepare($sql);
            $stm->bindParam(':fk_treino',$fk_treino);
            $stm->execute();
            return $stm->fetchAll();
        }

        public function findName($id){
            $sql="SELECT nome_ficha FROM $this->tabela where id_fichaExercicio=:id_fichaExercicio";
            $stm=DB::prepare($sql);
            $stm->bindParam(':id_fichaExercicio',$id);
            $stm->execute();
            return $stm->fetchAll();
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
        public function update($id){
            $num_serie= $this->getNum_serie();
            $repeticoes= $this->getRepeticoes();
            $carga= $this->getCarga();
            $tempo_descanso= $this->getTempo_descanso();
            $sql="UPDATE $this->tabela SET num_serie=:num_serie ,repeticoes=:repeticoes ,carga=:carga ,tempo_descanso=:tempo_descanso 
            WHERE id_fichaExercicio = :id";
            $stm=DB::prepare($sql);
            $stm->bindParam(':id',$id,PDO::PARAM_INT);
            $stm->bindParam(':num_serie',$num_serie);
            $stm->bindParam(':repeticoes',$repeticoes);
            $stm->bindParam(':carga',$carga);
            $stm->bindParam(':tempo_descanso',$tempo_descanso);
            return $stm->execute();
        }
        public function updateName($id,$nomeAntigo){
            
            $nome_ficha=$this->getNomeFicha();           
            $sql="UPDATE $this->tabela SET nome_ficha= :nome_ficha WHERE fk_treino = :id AND nome_ficha=:nomeAntigo";
            $stm=DB::prepare($sql);
            $stm->bindParam(':id',$id,PDO::PARAM_INT);
            $stm->bindParam(':nome_ficha',$nome_ficha);
            $stm->bindParam(':nomeAntigo',$nomeAntigo);

            return $stm->execute();
        }
        public function deleteExercicio($id_exercicio){
            $sql="DELETE FROM $this->tabela WHERE id_fichaExercicio=:id_fichaExercicio";
            $stm=DB::prepare($sql);
            $stm->bindParam(':id_fichaExercicio',$id_exercicio,PDO::PARAM_INT);
            return $stm->execute();
        }
        public function delete($id_treino, $nome_ficha){
            $sql="DELETE FROM $this->tabela WHERE fk_treino=:fk_treino AND nome_ficha=:nome_ficha";
            $stm=DB::prepare($sql);
            $stm->bindParam(':fk_treino',$id_treino,PDO::PARAM_INT);
            $stm->bindParam(':nome_ficha',$nome_ficha);
            return $stm->execute();
        }
    }
?>