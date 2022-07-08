<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once '../../Controller/Treino/CrudTreino.php';
require_once '../../Controller/FichaExercicio/CrudFichaExercicio.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/css vizualizarFicha/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Andika&display=swap" rel="stylesheet">

    <title>PoriGYM</title>

</head>
<?php
$fichaExercicio = new CrudFichaExercicio;
if (isset($_POST['alterar'])) {
    $fichaExercicioAlterar = new CrudFichaExercicio;
    $fichaExercicioAlterar->setNomeFicha($_POST['nome_ficha']);
    $fichaExercicioAlterar->updateName($_POST['id_treino'], $_POST['nomeAntigo']);
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
            <p> > </p>
            <p>Listar Fichas</p>

        </div>
        <div class="conteudo">
            <h1 class="edit-title">Lista de Fichas</h1>

            <form action="#modal_1" method="post">
                <div class="button_find">
                    <button type="submit">Adicionar Ficha</button>
                    <input type="hidden" name="id_treino" value="<?php echo $_POST['id_treino'] ?>">
                </div>
            </form>

            <table class="table" border="1">
                <thead>
                    <th class="table_head">Nome da Ficha</th>
                    <th class="table_head">Ações</th>
                </thead>
                <tbody>

                    <?php


                    if (isset($_POST['excluir'])) {
                        $id = $_POST['id_treino'];
                        $fichaExercicio->delete($id, $_POST['nome_ficha']);
                    }

                    foreach ($fichaExercicio->findFichas($_POST['id_treino']) as $key => $value) {
                    ?>
                        <tr>
                            <td class="table_body"> <?php echo $value->nome_ficha; ?> </td>
                            <td>
                                <div class="alinha_botao">
                                    <form action="visualizarExerciciosFicha.php" method="post">
                                        <button type="submit" name="visualizar">
                                            <span class="icons_table">
                                                <ion-icon name="eye-outline"></ion-icon>
                                            </span>
                                        </button>
                                        <input type="hidden" name="id_treino" value="<?php echo $_POST['id_treino'] ?>">
                                        <input type="hidden" name="nome_ficha" value="<?php echo $value->nome_ficha ?>">
                                    </form>
                                    <form action="#modal_2" method="post">
                                        <button type="submit" name="alterar">
                                            <span class="icons_table">
                                                <ion-icon name="create-outline"></ion-icon>
                                        <input type="hidden" name="nomeAntigo" value="<?php echo $value->nome_ficha ?>">

                                            </span>
                                        </button>
                                        <input type="hidden" name="id_treino" value="<?php echo $_POST['id_treino'] ?>">
                                        <input type="hidden" name="nome_ficha" value="<?php echo $value->nome_ficha; ?>">
                                    </form>
                                    <form action="" method="post">
                                        <button type="submit" name="excluir">
                                            <span class="icons_table">
                                                <ion-icon name="trash-outline"></ion-icon>
                                            </span>
                                        </button>
                                        <input type="hidden" name="id_treino" value="<?php echo $_POST['id_treino'] ?>">
                                        <input type="hidden" name="nome_ficha" value="<?php echo $value->nome_ficha ?>">
                                    </form>
                                </div>
                            </td>
                        <?php } ?>
                        </tr>

                </tbody>
            </table>
        </div>
    </main>
    <div id="modal_1" class="modal">
        <div class="modal__content">
            <h2 class="modal__title">
                <strong>Digite o nome</strong>
            </h2>
            <form action="../criarFichaExercicio/index.php" class="modal__description" method="POST">
                <div class="text_field">
                    <label for="nome_ficha">Nome da Ficha</label>
                    <input type="text" name="nome_ficha" >
                </div>
                <input type="hidden" name="id_treino" value="<?php echo $_POST['id_treino'] ?>">


                <div class="botao-cadastro" id="botao_salvar_ficha">
                    <button name='cadastrarNovaFicha' class="save-name-modal" type="submit">OK</button>
                </div>


            </form>
        </div>
    </div>
    <div id="modal_2" class="modal">
        <div class="modal__content">
            <h2 class="modal__title">
                <strong>Editar Treino</strong>
            </h2>
            <form action="index.php" class="modal__description" method="POST">
                <div class="text_field">
                    <label for="nome_ficha">Nome da ficha:</label>
                    <input type="text" name="nome_ficha" value="<?php echo $_POST['nome_ficha'] ?>" required>
                </div>
                <input type="hidden" name="nomeAntigo" value="<?php echo $_POST['nomeAntigo'] ?>">
                <input type="hidden" name="id_treino" value="<?php echo $_POST['id_treino']; ?>">

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
                                <ion-icon name="home-outline"></ion-icon>
                                <span class="title">Home</span>
                            </span>
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