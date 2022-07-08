<?php
require_once '../../Controller/Exercicio/CrudExercicio.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/css vizualizarExercicios/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Andika&display=swap" rel="stylesheet">

    <title>PoriGYM</title>

</head>
<?php
$exercicio = new CrudExercicio;
$exercicioDados = $exercicio->findData($_POST['id_exercicio']);
?>

<body>

    <main>

        <div class="sequencia_topo">

            <p> Home </p>
            <p> > </p>
            <p>Treino</p>
            <p> > </p>
            <p>Listar Treinos</p>
            <p> > </p>
            <p>Listar Fichas</p>
            <p> > </p>
            <p>Listar Exercícios</p>
            <p> > </p>
            <p>Descrição Exercício</p>

        </div>

        <div class="container_main" id="scrollbar">

            <div class="conteudo">
                <h1 class="edit-title">Exercício</h1>
                <h3 class="edit-title"><?php echo $exercicioDados->nome ?></h3>
                <table class="table" border="1">
                    <thead>
                        <th class="table_head">Descrição</th>
                    </thead>
                    <tbody>
                        <td class="table_body"><?php echo $exercicioDados->descricao ?></td>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="img-exercicio">
                <img src="../../img/exercicios/<?php echo $_POST['id_exercicio'].".jpg" ?>" alt="" width="400px">
        </div>
        <form action="../visualizarFicha/visualizarExerciciosFicha.php" method="post">
            <div class="button_find" id="botao_salvar_ficha">
                <input type="hidden" name="nome_ficha" value="<?php echo $_POST['nome_ficha']; ?>">
                <input type="hidden" name="id_treino" value="<?php echo $_POST['id_treino'] ?>">
                <button type="submit" class="btn">Voltar</button>
            </div>
        </form>
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