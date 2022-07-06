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

<body>

    <main>

        <div class="sequencia_topo">

            <a href="">Home</a>
            <p> > </p>
            <a href="">Treino</a>
            <p> > </p>
            <a href="">Criar treino</a>

        </div>

        <div class="container_main" id="scrollbar">

            <div class="conteudo">
                <h1 class="edit-title">Lista de treinos</h1>
                <h3 class="edit-title">Ficha 1</h3>
            </div>
            <div class="conteudo" id="scrollbar">
                
                <table class="table" border="1">
                    <thead>
                        <th class="table_head">Nome</th>
                        <th class="table_head">Numero de séries</th>
                        <th class="table_head">Repetições</th>
                        <th class="table_head">Carga</th>
                        <th class="table_head">Tempo de descanso</th>
                        <th class="table_head">Ações</th>
                    </thead>
                    <tbody>
                        <td class="table_body">Rosca Alternada</td>
                        <td class="table_body">3</td>
                        <td class="table_body">52</td>
                        <td class="table_body">500kg</td>
                        <td class="table_body">2 segs</td>
                        <td class="table_body">
                            <button type="submit" name="visualizar">
                                <ion-icon name="eye-outline"></ion-icon>Visualizar
                            </button>
                            <button type="submit" name="alterar">
                                <ion-icon name="create-outline"></ion-icon>Alterar
                            </button>
                            <button type="submit" name="excluir">
                                <ion-icon name="trash-outline"></ion-icon>Excluir
                            </button>
                        </td>
                    </tbody>
                    
                </table>
            </div>
        </div>
    </main>

    <asideL>

        <div class="aaa">
            <div class="cont_esq">
                <img src="img/logo_braco.png" height="120px">
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