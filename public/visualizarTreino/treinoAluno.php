<?php
require_once '../../Controller/Treino/CrudTreino.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/css vizualizarTreino/style_list.css">
    <link href="https://fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Andika&display=swap" rel="stylesheet">

    <title>PoriGYM</title>

</head>
<?php
if($_POST['cpf_aluno']==NULL){
    $post_cpf_aluno = explode(':', $_POST['nome_aluno']);
    $cpf_aluno = intval(substr($post_cpf_aluno[1], 1, -2));
    $treino = new CrudTreino;
    $treino->setCpf_aluno($cpf_aluno);
}else{
    $treino = new CrudTreino;
    $treino->setCpf_aluno($_POST['cpf_aluno']);
}
?>

<body>

    <main id="scrollbar">

        <div class="sequencia_topo">

            <a href="">Home</a>
            <p> > </p>
            <a href="">Treino</a>
            <p> > </p>
            <a href="">Criar treino</a>
           

        </div>
        <div class="conteudo">
            <h1 class="edit-title">Lista de treinos</h1>
                <div class="button_find">
                    <button type="submit">Criar Novo Treino</button>
                </div>
            <table class="table" border="1">
                <thead>
                    <th class="table_head">Nome</th>
                    <th class="table_head">Data do Treino</th>
                    <th class="table_head">Ações</th>
                </thead>
                <tbody>
                    <?php

                   
                    if (isset($_POST['excluir'])) {
                        $id = $_POST['id'];
                        $treino->delete($id);
                    }
                    foreach ($treino->findTreinoAluno() as $key => $value) {
                    ?>
                        <tr>
                            <td class="table_body"> <?php echo $value->nome_treino; ?> </td>
                            <td class="table_body"> <?php echo $value->dt_treino; ?> </td>
                            <td>
                                <form action="../visualizarFicha/index.php" method="post">
                                    <button type="submit" name="visualizar">
                                        <ion-icon name="eye-outline"></ion-icon>Visualizar
                                    </button>
                                    <input type="hidden" name="id_treino" value="<?php echo $value->id_treino ?>">
                                </form>
                                <button type="submit" name="alterar">
                                    <ion-icon name="create-outline"></ion-icon>Alterar
                                </button>
                                <form action="" method="post">
                                    <button type="submit" name="excluir">
                                        <ion-icon name="trash-outline"></ion-icon>Excluir
                                    </button>
                                    <input type="hidden" name="id" value="<?php echo $value->id_treino ?>">
                                    <input type="hidden" name="cpf_aluno" value="<?php echo $value->cpf_aluno ?>">

                                </form>

                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </main>

    <asideL>
        <div class="aaa">

            <div class="cont_esq">
                <img src="../../css/css vizualizarTreino/img/logo_braco.png" height="120px">
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
                        <a href="../treino/index.php" class="caixaLateral">
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