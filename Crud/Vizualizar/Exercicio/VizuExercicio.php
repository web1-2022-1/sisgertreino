<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
    require_once 'CrudExercicio.php'

?>

<!DOCTYPE html>
<html lang='pt-BR' >
    <head>
        <title> Lista de Exercicios</title>
    </head>

    <body>
        <header> </header>
        <main> 
            <div class='tabela' >

            <table class='table' border=1>
                <thead>
                    <tr class='active'>
                        <th>ID Exercício</th>
                        <th>Nome</th>
                        <th> Dificuldade </th>
                        <th> Grupo Muscular</th>
                        <th>Descrição</th>
                    </tr>
                </thead>
                <tmain>

                <?php

                    $exercicio=new CrudExercicio;

                    

                  /*  if(isset($_POST['excluir'])){
                        $id=$_POST['id'];
                        $aluno->deletar($id);
                    }*/


                    foreach ($exercicio->findAll() as $key=>$value) {
                ?>

                <tr>
                    <td> <?php echo $value->id_exercicio;?> </td>
                    <td> <?php echo $value->nome;?> </td>
                    <td> <?php echo $value->dificuldade;?> </td>
                    <td> <?php echo $value->grupo_muscular;?> </td>
                    <td> <?php echo $value->descricao;?> </td>
                    
                </tr>
                <?php } ?>


                </tmain>      

            </div>
        </main>
        <footer> </footer>
</html>