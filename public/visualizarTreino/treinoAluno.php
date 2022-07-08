<?php
require_once '../../Controller/Treino/CrudTreino.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/css vizualizarTreino/style-2.css">
    <link href="https://fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Andika&display=swap" rel="stylesheet">

    <title>PoriGYM</title>

</head>
<?php
$treino = new CrudTreino;
if ($_POST['cpf_aluno'] == NULL) {
    $post_cpf_aluno = explode(':', $_POST['nome_aluno']);
    $cpf_aluno = intval(substr($post_cpf_aluno[1], 1, -2));
    $treino->setCpf_aluno($cpf_aluno);
} else {

    $treino->setCpf_aluno($_POST['cpf_aluno']);
}
if (isset($_POST['alterar'])) {
    $treinoAlterar = new CrudTreino;
    $treino->setCpf_aluno($_POST['cpf_aluno']);
    $treinoAlterar->setNome_treino($_POST['nome_treino']);
    $treinoAlterar->setDt_treino($_POST['dt_treino']);
    $treinoAlterar->update($_POST['id_treino']);
}
?>

<body>

    <main id="scrollbar">

        <div class="sequencia_topo">

            <p>Home</p>
            <p> > </p>
            <p>Treino</p>
            <p> > </p>
            <p>Listar Treinos</p>


        </div>
        <div class="conteudo">
            <h1 class="edit-title">Lista de treinos</h1>
            <form action="../treino/nomeTreino.php" method="post">
                <div class="button_find">
                    <button type="submit">Criar Novo Treino</button>
                    <input type="hidden" name="cpf_aluno" value="<?php echo  $cpf_aluno; ?>">
                    <input type="hidden" name="booleano" value='1'>
                </div>
            </form>
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
                        $treino->deleteCascade($id);
                    }
                    foreach ($treino->findTreinoAluno() as $key => $value) {
                    ?>
                        <tr>
                            <td class="table_body"> <?php echo $value->nome_treino; ?> </td>
                            <td class="table_body"> <?php echo $value->dt_treino; ?> </td>
                            <td>
                                <div class="alinha_botao">
                                    <form action="../visualizarFicha/index.php" method="post">
                                        <button type="submit" name="visualizar">
                                            <span class="icons_table">
                                                <ion-icon name="eye-outline"></ion-icon>
                                            </span>
                                        </button>
                                        <input type="hidden" name="id_treino" value="<?php echo $value->id_treino ?>">
                                    </form>
                                    <form action="#modal_1" method="post">
                                        <button type="submit" name="alterar">
                                            <span class="icons_table">
                                                <ion-icon name="create-outline"></ion-icon>
                                            </span>
                                        </button>
                                        <input type="hidden" name="nome_treino" value="<?php echo $value->nome_treino; ?>">
                                        <input type="hidden" name="dt_treino" value="<?php echo $value->dt_treino; ?>">
                                        <input type="hidden" name="id_treino" value="<?php echo $value->id_treino; ?>">
                                        <input type="hidden" name="cpf_aluno" value="<?php echo $value->cpf_aluno; ?>">
                                    </form>
                                    <form action="" method="post">
                                        <button type="submit" name="excluir">
                                            <span class="icons_table">
                                                <ion-icon name="trash-outline"></ion-icon>
                                                <span class="icons_table">
                                        </button>
                                        <input type="hidden" name="id" value="<?php echo $value->id_treino ?>">
                                        <input type="hidden" name="cpf_aluno" value="<?php echo $value->cpf_aluno ?>">
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </main>
    <div id="modal_1" class="modal">
        <div class="modal__content">
            <h2 class="modal__title">
                <strong>Editar Treino</strong>
            </h2>
            <form action="treinoAluno.php" class="modal__description" method="POST">
                <div class="text_field">
                    <label for="nome_ficha">Nome do treino:</label>
                    <input type="text" name="nome_treino" value="<?php echo $_POST['nome_treino'] ?>" required>
                </div>
                <div class="text_field">
                    <label for="nome_ficha">Data do treino:</label>
                    <input type="date" name="dt_treino" value="<?php echo $_POST['dt_treino'] ?>" required>
                    <input type="hidden" name="id_treino" value="<?php echo $_POST['id_treino']; ?>">
                    <input type="hidden" name="cpf_aluno" value="<?php echo $_POST['cpf_aluno']; ?>">

                </div>
                <div class="botao-cadastro" id="botao_salvar_ficha">
                    <button class="save-name-modal" name="alterar" type="submit">ALTERAR</button>
                </div>


            </form>
        </div>
    </div>

    <asideL>
        <div class="aaa">

            <div class="cont_esq">
                <img src="../../img/logo/logo_braco.png" height="120px">
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
                                <span class="title">Treino</span>
                            </span>
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
                                <span class="title">Sair</span>
                            </span>
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