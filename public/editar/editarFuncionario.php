<?php
require_once '../../Controller/Instrutor/CrudInstrutor.php';
require_once '../../Controller/Contato/CrudContato.php';
require_once '../../Controller/Login/CrudLogin.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/css editar/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Andika&display=swap" rel="stylesheet">

    <title>PoriGYM - Editar usuários</title>

</head>
<?php

if (isset($_POST['editar'])) :

    $login = new CrudLogin;
    $login->setUsuario($_POST['user']);
    $login->setSenha($_POST['senha']);

    $instrutor = new Crudinstrutor;

    $instrutor->setCpf_instrutor($_POST['cpf']);
    $instrutor->setNome($_POST['nome']);
    $instrutor->setDt_nascimento($_POST['dt_nascimento']);

    $contato = new CrudContato;

    $contato->setTelefone($_POST['tel']);
    $contato->setEmail($_POST['email']);
    $contato->setCpf_instrutor($_POST['cpf']);

    $idLogin = new CrudLogin;
    $idLogin->setUsuario($_POST['userAntigo']);

    var_dump($_POST);
    $idLogin2 = $idLogin->getIdLogin();
    var_dump($idLogin->getIdLogin());
    $login->update($idLogin2->id_login);
    $instrutor->update($_POST['cpf']);
    $contato->update($_POST['cpf']);
    header("Location: ../visualizarUsuario/index.php");;


endif;
?>

<body>

    <main>

        <div class="sequencia_topo">

        <p>Home</p>
            <p> > </p>
            <p>Usuário</p>
            <p> > </p>
            <p>Listar Usuários</p>
            <p> > </p>
            <p>Editar Funcionário </p>

        </div>

        <div class="cont_tudo" id="scrollbar">
            <div class="cont_title">
                <h1 class="edit-title">Editar Funcionário</h1>
            </div>
        <div class="conteudo">
            <form action="" method='post'>
                <div class="campo-texto">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" value="<?php echo $_POST['nome'] ?>">
                </div>
                <div class="campo-texto">
                    <label for="nome">Usuario</label>
                    <input type="text" name="user" value="<?php echo $_POST['usuario'] ?>">
                    <input type="hidden" name="userAntigo" value="<?php echo $_POST['usuario'] ?>">
                </div>
                <div class="campo-texto">
                    <label for="nome">Senha</label>
                    <input type="password" name="senha" value="<?php echo $_POST['senha'] ?>">
                </div>
                <div class="campo-texto">
                    <input type="hidden" name="cpf" value="<?php echo $_POST['cpf_instrutor'] ?>">
                </div>
                <div class="campo-texto">
                    <label for="dt_nascimento">Data de Nascimento</label>
                    <input type="date" name="dt_nascimento" value="<?php echo $_POST['dt_nascimento'] ?>">
                </div>
                <div class="campo-texto">
                    <label for="telefone">Telefone</label>
                    <input type="text" name="tel" value="<?php echo $_POST['telefone'] ?>">
                </div>
                <div class="campo-texto">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" value="<?php echo $_POST['email'] ?>">
                </div>

                <div class="botao-cadastro">
                    <button type="submit" name="editar" class="botao">Editar</button>
                </div>
            </form>
        </div>
    </main>

    <asideL>

        <div class="aaa">
            <div class="cont_esq">
                <img src="../../css/css dashboard/img/logo_braco.png" height="120px">
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