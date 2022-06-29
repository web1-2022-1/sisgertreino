<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
    require_once 'CrudInstrutor.php'

?>

<!DOCTYPE html>
<html lang='pt-BR' >
    <head>
        <title> Lista de Instrutores</title>
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

                    $instrutor=new CrudInstrutor;

                    

                  /*  if(isset($_POST['excluir'])){
                        $id=$_POST['id'];
                        $aluno->deletar($id);
                    }*/


                    foreach ($instrutor->findAll() as $key=>$value) {
                ?>

                <tr>
                    <td> <?php echo $value->nome;?> </td>
                    <td> <?php echo $value->cpf_instrutor;?> </td>
                    <td> <?php echo $value->dt_nascimento;?> </td>
                </tr>
                <?php } ?>


                </tmain>      

            </div>
        </main>
        <footer> </footer>
</html>