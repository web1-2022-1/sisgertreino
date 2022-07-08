<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once '../../Controller/Treino/CrudTreino.php';
require_once '../../Controller/FichaExercicio/CrudFichaExercicio.php';
require_once '../../Controller/Exercicio/CrudExercicio.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width>, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/css criarFichaExercicio/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Andika&display=swap" rel="stylesheet">

    <title>PoriGYM</title>

</head>
<?php



if (isset($_POST['excluir'])) {
    $idTreino = $_POST['fk'];
}
if (isset($_POST['nome'])) {
    $treino = new CrudTreino;
    $treino->setCpf_aluno($_POST['cpf_aluno']);
    $treino->setDt_treino($_POST['dt_treino']);
    $treino->setNome_treino($_POST['nome']);
    $treino->insert();
    $treinoid = $treino->findId();
    $idTreino = $treinoid->id_treino;
}
$exercicio = new CrudExercicio;
$fichaexercicio = new CrudFichaExercicio;

if (isset($_POST['ok'])) {

    $exercicio->setNome($_POST['nomeExercicio']);
    $idExercicio = $exercicio->findId();
    $fichaexercicio->setNomeFicha($_POST['nome_ficha']);
    $fichaexercicio->setFk_exercicio($idExercicio->id_exercicio);
    $fichaexercicio->setCarga($_POST['carga']);
    $fichaexercicio->setRepeticoes($_POST['repeticoes']);
    $fichaexercicio->setTempo_descanso($_POST['descanso']);
    $fichaexercicio->setNum_serie($_POST['num_serie']);
    $fichaexercicio->setFk_treino($_POST['fk_treino']);
    $fichaexercicio->insert();
    $idTreino = $_POST['fk_treino'];
}
if (isset($_POST['cadastrarNovaFicha'])) {
    $idTreino = $_POST['id_treino'];
}
if (isset($_POST['selecionarExec'])) {
    $idTreino = $_POST['fk'];
}
if (isset($_POST['alterar'])) {
    $exercicioAlterar = new CrudExercicio;
    $exercicioAlterar->setNome($_POST['nome_exercicio']);
    $idExercicio = $exercicioAlterar->findId();
    $fichaexercicioAlterar = new CrudFichaExercicio;
    $fichaexercicioAlterar->setFk_exercicio($idExercicio->id_exercicio);
    $fichaexercicioAlterar->setCarga($_POST['carga']);
    $fichaexercicioAlterar->setRepeticoes($_POST['repeticoes']);
    $fichaexercicioAlterar->setTempo_descanso($_POST['descanso']);
    $fichaexercicioAlterar->setNum_serie($_POST['num_serie']);
    $fichaexercicioAlterar->update($_POST['id']);
    $idTreino = $_POST['fk_treino'];
}

?>

<body>

    <main id="scrollbar">

        <div class="sequencia_topo">

            <p>Home</p>
            <p> > </p>
            <p>Treino</p>
            <p> > </p>
            <p>Criar Treino</p>
            <p> > </p>
            <p>Criar Ficha de Exercício</p>

        </div>
        <div class="container_main" id="scrollbar">
            <div class="conteudo">
                <h1 class="form-title">Criar Ficha de Exercícios</h1>

                <form method='POST' action="#modal_1">
                    <div class="search">
                        <div class="campo-texto">
                            <label for="nome_aluno">Nome do exercício</label>
                            <input type="text" name="nome_exercicio" list="pesquisa_aluno" required />
                            <input type="hidden" name="fk" value="<?php echo $idTreino; ?>">

                            <input type="hidden" name="nome_ficha" value="<?php echo $_POST['nome_ficha']; ?>">

                        </div>
                        <div class="button_find">
                            <button type="submit" name="selecionarExec" class="btn">SELECIONAR EXERCÍCIO</button>
                        </div>
                    </div>
                    <datalist id="pesquisa_aluno">
                        <?php
                        foreach ($exercicio->findAll() as $key => $value) {
                        ?>

                            <option name="nome_exercicio"><?php echo $value->nome ?></option>


                        <?php }

                        ?>
                    </datalist>



                </form>

                <div class="table_exercicios">
                    <table class="table" border="1">
                        <thead>
                            <th class="table_head">Nome</th>
                            <th class="table_head">Número de series</th>
                            <th class="table_head">Repetições</th>
                            <th class="table_head">Carga(kg)</th>
                            <th class="table_head">Tempo de descanso</th>
                            <th class="table_head">Ações</th>
                        </thead>
                        <tbody>
                            <?php


                            if (isset($_POST['excluir'])) {
                                $id = $_POST['id'];
                                $fichaexercicio->deleteExercicio($id);
                            }
                            foreach ($fichaexercicio->findData($_POST['nome_ficha'], $idTreino) as $key => $value) {
                            ?>
                                <tr>
                                    <td class="table_body"> <?php echo $value->nome; ?> </td>
                                    <td class="table_body"> <?php echo $value->num_serie; ?> </td>
                                    <td class="table_body"> <?php echo $value->repeticoes; ?> </td>
                                    <td class="table_body"> <?php echo $value->carga; ?> </td>
                                    <td class="table_body"> <?php echo $value->tempo_descanso; ?> </td>
                                    <td id="acoes">
                                        <div class="alinha_botao">
                                            <form action="#modal_2" method="post">
                                                <button type="submit" name="alterar">
                                                    <span class="icons_table">
                                                        <ion-icon name="create-outline"></ion-icon>
                                                        <input type="hidden" name="id" value="<?php echo $value->id_fichaExercicio; ?>">
                                                        <input type="hidden" name="nome_exercicio" value="<?php echo $value->nome; ?>">
                                                        <input type="hidden" name="num_serie" value="<?php echo $value->num_serie; ?>">
                                                        <input type="hidden" name="repeticoes" value="<?php echo $value->repeticoes; ?>">
                                                        <input type="hidden" name="carga" value="<?php echo $value->carga; ?>">
                                                        <input type="hidden" name="descanso" value="<?php echo $value->tempo_descanso; ?>">

                                                        <input type="hidden" name="fk_treino" value="<?php echo $idTreino; ?>">
                                                        <input type="hidden" name="nome_ficha" value="<?php echo $_POST['nome_ficha']; ?>">


                                                    </span>
                                                </button>
                                            </form>
                                            <form action="" method="post">
                                                <button type="submit" name="excluir">
                                                    <span class="icons_table">
                                                        <ion-icon name="trash-outline"></ion-icon>
                                                        <input type="hidden" name="nome_ficha" value="<?php echo $_POST['nome_ficha']; ?>">
                                                        <input type="hidden" name="id" value="<?php echo $value->id_fichaExercicio; ?>">
                                                        <input type="hidden" name="fk" value="<?php echo $idTreino; ?>">

                                                    </span>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                <?php } ?>

                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <form action="../visualizarFicha/index.php" method="post">
                <div class="button_find" id="botao_salvar_ficha">
                    <button type="submit" class="btn">Salvar Ficha</button>
                    <input type="hidden" name="id_treino" value="<?php echo $idTreino ?>">
                </div>
            </form>
        </div>
    </main>
    <div id="modal_1" class="modal">

        <div class="modal__content">
            <h2 class="modal__title">
                <strong>INCLUA OS VALORES</strong>
            </h2>
            <form action="index.php" method="post">
                <div class="text_field">
                    <label for="num_serie">Número de séries</label>
                    <input type="number" name="num_serie" required>
                </div>
                <div class="text_field">
                    <label for="repeticoes">Repetições</label>
                    <input type="number" name="repeticoes" required>
                </div>
                <div class="text_field">
                    <label for="carga">Carga(kg)</label>
                    <input type="number" name="carga" required>
                </div>
                <div class="text_field">
                    <label for="descanso">Tempo de descanso</label>
                    <input type="number" name="descanso" required>
                </div>

                <input type="hidden" name="nomeExercicio" value="<?php echo $_POST['nome_exercicio']; ?>">
                <input type="hidden" name="fk_treino" value="<?php echo $_POST['fk']; ?>">
                <input type="hidden" name="nome_ficha" value="<?php echo $_POST['nome_ficha']; ?>">
                <div class="div_button">
                    <button type="submit" name="ok" class="btn_modal">OK</button>
                </div>
        </div>
        </form>
    </div>





    <div id="modal_2" class="modal">

        <div class="modal__content">
            <h2 class="modal__title">
                <strong>ALTERE OS VALORES</strong>
            </h2>
            <form action="index.php" method="post">
                <div class="text_field">
                    <label for="num_serie">Número de séries</label>
                    <input type="number" name="num_serie"  required>
                </div>
                <div class="text_field">
                    <label for="repeticoes">Repetições</label>
                    <input type="number" name="repeticoes" required>
                </div>
                <div class="text_field">
                    <label for="carga">Carga(kg)</label>
                    <input type="number" name="carga" required>
                </div>
                <div class="text_field">
                    <label for="descanso">Tempo de descanso</label>
                    <input type="number" name="descanso" required>
                </div>
                <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">
                <input type="hidden" name="nome_exercicio" value="<?php echo $_POST['nome_exercicio']; ?>">
                <input type="hidden" name="fk_treino" value="<?php echo $_POST['fk_treino']; ?>">
                <input type="hidden" name="nome_ficha" value="<?php echo $_POST['nome_ficha']; ?>">

                <div class="div_button">
                    <button type="submit" name="alterar" class="btn_modal">ALTERAR</button>
                </div>
        </div>
        </form>
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