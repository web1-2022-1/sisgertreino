<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
    require_once 'CrudAluno.php'

?>

<!DOCTYPE html>
<html lang='pt-BR' >
    <head>
        <title> Lista de Alunos</title>
    </head>

    <body>
        <header> </header>
        <main> 
            <div class='tabela' >

            <table class='table' border=1>
                <thead>
                    <tr class='active'>
                        <th>Nome</th>
                        <th> CPF </th>
                        <th> Data de nascimento</th>
                    </tr>
                </thead>
                <tmain>

                <?php

                    $aluno=new Aluno;

                    

                  /*  if(isset($_POST['excluir'])){
                        $id=$_POST['id'];
                        $aluno->deletar($id);
                    }*/


                    foreach ($aluno->findAll() as $key=>$value) {
                ?>

                <tr>
                    <td> <?php echo $value->nome;?> </td>
                    <td> <?php echo $value->cpf_aluno;?> </td>
                    <td> <?php echo $value->dt_nascimento;?> </td>
                </tr>
                <?php } ?>


                </tmain>      

            </div>
        </main>
        <footer> </footer>
</html>