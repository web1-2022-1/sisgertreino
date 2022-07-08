<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once '../../Controller/Instrutor/CrudInstrutor.php';
require_once '../../Controller/Aluno/CrudAluno.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/css visualizarUsuario/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Andika&display=swap" rel="stylesheet">

    <title>PoriGYM</title>

</head>

<body>

    <main>

        <div class="sequencia_topo">

            <p>Home</p>
            <p> > </p>
            <p>Usuário</p>
            <p> > </p>
            <p>Listar usuários</p>

        </div>

        <div class="cont_listar_usuario">

            <nav class="abas_listar">

                <ul>
                    <li>

                        <input type="radio" name="abas" class="a_tabs" id="aba_1" checked>
                        <label for="aba_1">Funcionários</label>

                        <div class="conteudo">

                            <table class="table" border="1">
                                <thead>
                                    <th class="table_head">Nome</th>
                                    <th class="table_head">Usuário</th>
                                    <th class="table_head">E-mail</th>
                                    <th class="table_head">Telefone(CEL)</th>
                                    <th class="table_head">Nascimento</th>
                                    <th class="table_head">CPF</th>
                                    <th class="table_head">Ações</th>
                                </thead>
                                <tbody>
                                    <?php

                                    $instrutor = new CrudInstrutor;

                                    if (isset($_POST['excluir'])) {
                                        $id = $_POST['cpf_instrutor'];
                                        $instrutor->delete($id);
                                    }

                                    foreach ($instrutor->findData() as $key => $value) {
                                    ?>
                                        <tr>
                                            <td class="table_body"> <?php echo $value->nome; ?> </td>
                                            <td class="table_body"> <?php echo $value->usuario; ?> </td>
                                            <td class="table_body"> <?php echo $value->email; ?> </td>
                                            <td class="table_body"> <?php echo $value->telefone; ?> </td>
                                            <td class="table_body"> <?php echo $value->dt_nascimento; ?> </td>
                                            <td class="table_body"> <?php echo $value->cpf_instrutor; ?> </td>
                                            <td>
                                                <div class="alinha_botao">
                                                    <form action="../editar/editarFuncionario.php" method="post">
                                                        <input name="cpf_instrutor" type="hidden" value="<?php echo $value->cpf_instrutor; ?>" />
                                                        <input name="nome" type="hidden" value="<?php echo $value->nome; ?>" />
                                                        <input name="usuario" type="hidden" value="<?php echo $value->usuario; ?>" />
                                                        <input name="senha" type="hidden" value="<?php echo $value->senha; ?>" />
                                                        <input name="email" type="hidden" value="<?php echo $value->email; ?>" />
                                                        <input name="telefone" type="hidden" value="<?php echo $value->telefone; ?>" />
                                                        <input name="dt_nascimento" type="hidden" value="<?php echo $value->dt_nascimento; ?>" />


                                                        <button type="submit" name="alterar">
                                                            <span class="icons_table">
                                                                <ion-icon name="create-outline"></ion-icon>
                                                            </span>
                                                        </button>
                                                    </form>
                                                    <form action="" method="post">
                                                        <input name="cpf_instrutor" type="hidden" value="<?php echo $value->cpf_instrutor; ?>" />
                                                        <button type="submit" name="excluir">
                                                            <span class="icons_table">
                                                                <ion-icon name="trash-outline"></ion-icon>
                                                            </span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>

                                        </tr>
                                    <?php } ?>


                                </tbody>
                            </table>

                        </div>
                    </li>

                    <li>

                        <input type="radio" name="abas" class="a_tabs" id="aba_2">
                        <label for="aba_2">Alunos</label>

                        <div class="conteudo">

                            <table class="table" border="1">
                                <thead>
                                    <th class="table_head">Nome</th>
                                    <th class="table_head">E-mail</th>
                                    <th class="table_head">Telefone(CEL)</th>
                                    <th class="table_head">Nascimento</th>
                                    <th class="table_head">CPF</th>
                                    <th class="table_head">Ações</th>

                                </thead>
                                <tbody>
                                    <?php

                                    $aluno = new CrudAluno;

                                    if (isset($_POST['excluir2'])) {
                                        $id = $_POST['cpf_aluno'];
                                        $aluno->delete($id);
                                    }

                                    foreach ($aluno->findData() as $key => $value) {
                                    ?>
                                        <tr>
                                            <td class="table_body"> <?php echo $value->nome; ?> </td>
                                            <td class="table_body"> <?php echo $value->email; ?> </td>
                                            <td class="table_body"> <?php echo $value->telefone; ?> </td>
                                            <td class="table_body"> <?php echo $value->dt_nascimento; ?> </td>
                                            <td class="table_body"> <?php echo $value->cpf_aluno; ?> </td>
                                            <td>
                                                <div class="alinha_botao">
                                                    <form action="../editar/editarAluno.php" method="post">
                                                        <input name="cpf_aluno" type="hidden" value="<?php echo $value->cpf_aluno; ?>" />
                                                        <input name="nome" type="hidden" value="<?php echo $value->nome; ?>" />
                                                        <input name="email" type="hidden" value="<?php echo $value->email; ?>" />
                                                        <input name="telefone" type="hidden" value="<?php echo $value->telefone; ?>" />
                                                        <input name="dt_nascimento" type="hidden" value="<?php echo $value->dt_nascimento; ?>" />


                                                        <button type="submit" name="alterar">
                                                            <span class="icons_table">
                                                                <ion-icon name="create-outline"></ion-icon>
                                                                <span class="icons_table">
                                                        </button>
                                                    </form>
                                                    <form action="" method="post">
                                                        <input name="cpf_aluno" type="hidden" value="<?php echo $value->cpf_aluno; ?>" />
                                                        <span class="icons_table">
                                                            <button type="submit" name="excluir2">
                                                                <span class="icons_table">
                                                                    <ion-icon name="trash-outline"></ion-icon>
                                                            </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>

                        </div>
                    </li>

                </ul>
            </nav>
        </div>

    </main>

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