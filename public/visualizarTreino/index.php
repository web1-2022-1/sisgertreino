<?php
require_once '../../Controller/Treino/CrudTreino.php'


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/css dashboard/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Andika&display=swap" rel="stylesheet">

    <title>PoriGYM</title>

</head>

<body>

    <main>
        <div id='tabel'>
            <table border=1>
                <thead>
                    <tr>
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
                <?php

                $treino = new CrudTreino;

                /*if(isset($_POST['excluir'])){
                            $id=$_POST['id'];
                            $aluno->deletar($id);
                        }*/
                foreach ($treino->findAll() as $key => $value) {
                ?>
                    <tr>
                        <td> <?php echo $value->nome; ?> </td>
                        <td> <?php echo $value->num_serie; ?> </td>
                        <td> <?php echo $value->repeticoes; ?> </td>
                        <td> <?php echo $value->carga; ?> </td>
                        <td> <?php echo $value->tempo_descanso; ?> </td>
                        <td> <?php echo $value->observacao_treino; ?> </td>
                        <td> <?php echo $value->id_exercicio; ?> </td>
                        <td> <?php echo $value->cpf_aluno; ?> </td>
                        <td> <?php echo $value->cpf_instrutor; ?> </td>

                    </tr>
                <?php } ?>

            </table>
        </div>


    </main>

    <asideL>

        <div class="aaa">
            <div class="cont_esq">
                <img src="../../css/css dashboard/img/logo_braco.png" height="120px">
                <h3 id="text_logo">PoriGYM</h3>
            </div>

            <div class="but_esq">
                <ul>
                    <li class="list">
                        <a href="../dashboard/index.php" class="caixaLateral">
                            <span class="icon">
                                <ion-icon name="home-outline">Home</ion-icon>
                            </span>
                            <span class="title">Home</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="but_esq">
                <ul>
                    <li class="list">
                        <p class="space">
                            <span class="icon">
                                <ion-icon name="person-outline"></ion-icon>
                            </span>
                            <span class="title">Usuário</span>
                        </p>
                    </li>
                    <li class="list_inside">
                        <a href="../cadastrarUsuario/index.php" class="caixaLateral">
                            <span class="title_inside">Cadastrar usuário</span>
                        </a>
                    </li>
                    <li class="list_inside">
                        <a href="../visualizarUsuario/index.php" class="caixaLateral">
                            <span class="title_inside">Listar usuários</span>
                        </a>
                    </li>

                </ul>
            </div>
            <div class="but_esq">
                <ul>
                    <li class="list">
                        <p class="space">
                            <span class="icon">
                                <ion-icon name="barbell-outline"></ion-icon>
                            </span>
                            <span class="title">Treino</span>
                        </p>
                    </li>
                    <li class="list_inside">
                        <a href="#" class="caixaLateral">
                            <span class="title_inside">Criar treinos</span>
                        </a>
                    </li>

                    <li class="list_inside">
                        <a href="../visualizarTreino/index.php" class="caixaLateral">
                            <span class="title_inside">Listar treinos</span>
                        </a>
                    </li>

                </ul>
            </div>
            <div class="but_esq">
                <ul>
                    <li class="list">
                        <a href="../login/index.php" class="caixaLateral">
                            <span class="icon">
                                <ion-icon name="log-out-outline"></ion-icon>
                            </span>
                            <span class="title">Sair</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </asideL>



        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>

        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>