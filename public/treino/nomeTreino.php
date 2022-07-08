<?php
require_once '../../Controller/Treino/CrudTreino.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/css treino/style-2.css">
    <link href="https://fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Andika&display=swap" rel="stylesheet">

    <title>PoriGYM</title>

</head>

<body>

    <main>

        <div class="sequencia_topo">

            <p>Home</p>
            <p> > </p>
            <p>Treino</p>
            <p> > </p>
            <p>Criar Treino</p>
            <?php
            if (isset($_POST['booleano'])) {
                $cpf_aluno = $_POST['cpf_aluno'];
            } else {
                $post_cpf_aluno = explode(':', $_POST['nome_aluno']);
                $cpf_aluno = intval(substr($post_cpf_aluno[1], 1, -2));
            }
            ?>

        </div>

        <div class="conteudo">

            <form action="#modal_1" method='POST'>

                <h1 class="edit-title">Criar Treino</h1>

                <div class="campo-texto">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" required>
                </div>
                <div class="campo-texto">
                    <label for="user">Data</label>
                    <input type="date" name="dt_treino" required>
                </div>
                <div class="botao-cadastro" id="botao_salvar_ficha">
                    <button type="submit" class="botao-cadastro-a">Salvar Treino</button>
                </div>
                <input type="hidden" name="cpf_aluno" value="<?php echo $cpf_aluno ?>">
            </form>

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
                    <input type="text" name="nome_ficha"  required>
                </div>
                <div class="botao-cadastro" id="botao_salvar_ficha">
                    <button class="save-name-modal" type="submit">OK</button>
                </div>
                <input type="hidden" name="nome" value="<?php echo $_POST['nome'] ?>">
                <input type="hidden" name="dt_treino" value="<?php echo $_POST['dt_treino'] ?>">
                <input type="hidden" name="cpf_aluno" value="<?php echo $_POST['cpf_aluno'] ?>">

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