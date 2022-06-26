<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
    require_once 'CrudTreino.php'

?>

<!DOCTYPE html>
<html lang='pt-BR' >
    <head>
        <title> Lista de Treinos</title>
    </head>

    <body>
        <header> </header>
        <main> 
            <div class='tabela' >

            <table class='table' border=1>
                <thead>
                    <tr class='active'>
                        <th>Nome</th>
                        <th> Séries </th>
                        <th> Repetições</th>
                        <th>Carga (Kg)</th>
                        <th>Descanso (segundos)</th>
                        <th>Observação</th>
                        <th>ID Exercício</th>
                        <th>CPF aluno</th>
                        <th>CPF instrutor</th>
                    </tr>
                </thead>
                <tmain>

                <?php

                    $treino=new CrudTreino;

                    

                  /*  if(isset($_POST['excluir'])){
                        $id=$_POST['id'];
                        $aluno->deletar($id);
                    }*/


                    foreach ($treino->findAll() as $key=>$value) {
                ?>

                <tr>
                    <td> <?php echo $value->nome;?> </td>
                    <td> <?php echo $value->num_serie;?> </td>
                    <td> <?php echo $value->repeticoes;?> </td>
                    <td> <?php echo $value->carga;?> </td>
                    <td> <?php echo $value->tempo_descanso;?> </td>
                    <td> <?php echo $value->observacao_treino;?> </td>
                    <td> <?php echo $value->id_exercicio;?> </td>
                    <td> <?php echo $value->cpf_aluno;?> </td>
                    <td> <?php echo $value->cpf_instrutor;?> </td>
                    
                </tr>
                <?php } ?>


                </tmain>      

            </div>
        </main>
        <footer> </footer>
</html>