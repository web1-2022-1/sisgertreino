<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width>, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/css criar ficha de treino/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Andika&display=swap" rel="stylesheet">

    <title>PoriGYM</title>

</head>

<body>

    <main>

        <div class="sequencia_topo">

            <a href="">Home</a>
            <p> > </p>
            <a href="">Treino</a>
            <p> > </p>
            <a href="">Criar treino</a>

        </div>
        <div class="conteudo">
            <h1 class="form-title">Criar Ficha de Exercícios</h1>
            <form method='POST' action="">
                <div class="search">
                    <div class="campo-texto">
                        <label for="nome_aluno">Nome do exercício</label>
                        <input type="text" name="nome_aluno" list="pesquisa_aluno" />
                    </div>
                    <div class="button_find">
                        <a href="#modal_1" class="btn">Selecionar Exercício</a>
                    </div>
                </div>
                <datalist id="pesquisa_aluno">
                    <option value="Carlos Silva Santos"></option>
                    <option value="Ana Maria Costa de Oliveira"></option>
                    <option value="Vitoria Cardoso Aguiar"></option>
                </datalist>
            </form>

            <!-- --------------->


            <!-- --------------->

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
                        <tr>
                            <td class="table_body"> </td>
                            <td class="table_body"> </td>
                            <td class="table_body"> </td>
                            <td class="table_body"> </td>
                            <td class="table_body"> </td>
                            <td id="acoes">
                                <a type="submit" name="alterar" href="#">
                                    <span class="icons_table">
                                        <ion-icon name="create-outline"></ion-icon>
                                    </span>
                                </a>
                                <a type="submit" name="excluir" href="#">
                                    <span class="icons_table">
                                        <ion-icon name="trash-outline"></ion-icon>
                                    </span>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>



    </main>

    <div id="modal_1" class="modal">
        <div class="modal__content">
            <h2 class="modal__title">
                <strong>INCLUA OS VALORES</strong>
            </h2>
            <form class="modal__description">
                <div class="text_field">
                    <label for="num_serie">Número de séries</label>
                    <input type="number" name="num_serie">
                </div>
                <div class="text_field">
                    <label for="repeticoes">Repetições</label>
                    <input type="number" name="repeticoes">
                </div>
                <div class="text_field">
                    <label for="carga">Carga(kg)</label>
                    <input type="number" name="carga">
                </div>
                <div class="text_field">
                    <label for="descanso">Tempo de descanso</label>
                    <input type="number" name="descanso">
                </div>
            </form>
            <a href="index.php" class="modal__link">OK</a>
        </div>
    </div>

    <asideL>

        <div class="aaa">
            <div class="cont_esq">
                <img src="../../css/css criar ficha de treino/img/logo_braco.png" height="120px">
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