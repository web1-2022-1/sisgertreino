<?php
require_once '../../Controller/Aluno/CrudAluno.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/css treino/style-1.css">
    <link href="https://fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Andika&display=swap" rel="stylesheet">

    <title>PoriGYM</title>

</head>

<body>
    <?php
    $aluno = new CrudAluno;
    ?>

    <main>

        <div class="sequencia_topo">

            <p>Home</p>
            <p> > </p>
            <p>Treino</p>
            <p> > </p>
            <p>Criar Treino</p>

        </div>
        <div class="conteudo">
            <h1 class="form-title">Selecionar Aluno</h1>
            <form method='POST' action="nomeTreino.php">
                <div class="search">
                    <div class="campo-texto">
                        <label for="nome_aluno">Nome do aluno</label>
                        <input name="nome_aluno" list="pesquisa_aluno" required />
                    </div>
                    <div class="button_find">
                        <button type="submit">Selecionar Aluno</button>
                    </div>
                </div>
                <datalist id="pesquisa_aluno">
                    <?php
                    foreach ($aluno->findAll() as $key => $value) {
                    ?>

                        <option name="nome e cpf"><?php echo $value->nome . ' (CPF: ' . $value->cpf_aluno . ' )' ?></option>
                        

                    <?php }

                    ?>
                </datalist>
            </form>
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