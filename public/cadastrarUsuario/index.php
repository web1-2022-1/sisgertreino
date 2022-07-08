<?php
session_start();
ob_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once '../../Controller/Instrutor/CrudInstrutor.php';
require_once '../../Controller/Login/CrudLogin.php';
require_once '../../Controller/Contato/CrudContato.php';
require_once '../../Controller/Aluno/CrudAluno.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/css cadastrarUsuario/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Andika&display=swap" rel="stylesheet">

    <title>PoriGYM</title>

</head>

<body>
    <?php

    $aluno = new CrudAluno;
    $instrutor = new CrudInstrutor;
    $login = new CrudLogin;
    $contato = new CrudContato;



    if (isset($_POST['cadastrar'])) :

        if ($_POST['abas'] == 'funcionario') {

            $login->setUsuario($_POST['user']);
            $login->setSenha($_POST['pass']);

            $instrutor->setCpf_instrutor($_POST['cpf']);
            $instrutor->setNome($_POST['nome']);
            $instrutor->setDt_nascimento($_POST['dt_nascimento']);

            $contato->setTelefone($_POST['tel']);
            $contato->setEmail($_POST['email']);
            $contato->setCpf_instrutor($_POST['cpf']);

            $isEmptyInstrutor = $instrutor->ifExist($_POST['cpf']);
            $isEmptyUsuario = $login->ifExist($_POST['user']);

            var_dump($isEmptyUsuario);

            if ($isEmptyInstrutor == false && $isEmptyUsuario == false) {
                $login->insert();
                $fk_login = $login->getIdLogin();
                $instrutor->setFk_login($fk_login->id_login);
                $instrutor->insert();
                $contato->insert();
            } else if ($isEmptyInstrutor != false) {
                $_SESSION['msg'] = "<p style='color: #ff0000'>CPF já cadastrado! </p>";
            } else if ($isEmptyUsuario != false) {
                $_SESSION['msg2'] = "<p style='color: #ff0000'>Usuario já cadastrado! </p>";
            }
        } else if ($_POST['abas'] == 'aluno') {

            $aluno->setCpf_aluno($_POST['cpf_aluno']);
            $aluno->setNome($_POST['nome_aluno']);
            $aluno->setDt_nascimento($_POST['dt_nascimento_aluno']);



            $contato->setTelefone($_POST['tel_aluno']);
            $contato->setEmail($_POST['email_aluno']);
            $contato->setCpf_aluno($_POST['cpf_aluno']);

            $isEmpty = $aluno->ifExist($_POST['cpf_aluno']);

            if ($isEmpty == false) {
                $aluno->insert();
                $contato->insert();
            } else {
                $_SESSION['msg'] = "<p style='color: #ff0000'>CPF já cadastrado! </p>";
            }
        }
    endif;

    ?>


    <main>

        <div class="sequencia_topo">

            <p>Home</p>
            <p> > </p>
            <p>Usuário</p>
            <p> > </p>
            <p>Cadastrar Usuário</p>


        </div>
        <div class="cont_cadastro">
            <nav class="abas_listar" id="scrollbar">
                <form action="" method="post">
                    <div class="cont_title">
                        <h1 class="login-title">Cadastro</h1>
                    </div>
                    <div>
                        <ul>
                            <li>

                                <input type="radio" name="abas" class="a_tabs" id="aba_1" value="funcionario" checked>
                                <label for="aba_1">Funcionários</label>
                                <div class="conteudo">

                                    <div class="campo-texto">
                                        <label for="nome">Nome</label>
                                        <input type="text" name="nome">
                                    </div>
                                    <div class="campo-texto">
                                        <label for="Usuario">Usuario</label>
                                        <?php
                                        if (isset($_SESSION['msg2'])) {
                                            echo $_SESSION['msg2'];
                                            unset($_SESSION['msg2']);
                                        }
                                        ?>
                                        <input type="text" name="user">
                                    </div>
                                    <div class="campo-texto">
                                        <label for="cpf">CPF</label>
                                        <?php
                                        if (isset($_SESSION['msg'])) {
                                            echo $_SESSION['msg'];
                                            unset($_SESSION['msg']);
                                        }
                                        ?>
                                        <input type="text" name="cpf">
                                    </div>
                                    <div class="campo-texto">
                                        <label for="dt_nascimento">Data de Nascimento</label>
                                        <input type="date" name="dt_nascimento">
                                    </div>
                                    <div class="campo-texto">
                                        <label for="telefone">Telefone</label>
                                        <input type="text" name="tel">
                                    </div>
                                    <div class="campo-texto">
                                        <label for="email">E-mail</label>
                                        <input type="email" name="email">
                                    </div>
                                    <div class="campo-texto">
                                        <label for="senha">Senha</label>
                                        <input type="password" name="senha">
                                    </div>
                                    <div class="botao-cadastro">
                                        <button type="submit" name="cadastrar" class="botao">Cadastrar</button>
                                    </div>



                                </div>
                            </li>

                            <li>

                                <input type="radio" name="abas" class="a_tabs" id="aba_2" value="aluno">
                                <label for="aba_2">Alunos</label>

                                <div class="conteudo2">

                                    <div class="campo-texto">
                                        <label for="nome">Nome</label>
                                        <input type="text" name="nome_aluno">
                                    </div>
                                    <div class="campo-texto">
                                        <label for="cpf">CPF</label>
                                        <?php
                                        if (isset($_SESSION['msg'])) {
                                            echo $_SESSION['msg'];
                                            unset($_SESSION['msg']);
                                        }
                                        ?>
                                        <input type="text" name="cpf_aluno">
                                    </div>
                                    <div class="campo-texto">
                                        <label for="dt_nascimento">Data de Nascimento</label>
                                        <input type="date" name="dt_nascimento_aluno">
                                    </div>
                                    <div class="campo-texto">
                                        <label for="telefone">Telefone</label>
                                        <input type="text" name="tel_aluno">
                                    </div>
                                    <div class="campo-texto">
                                        <label for="email">E-mail</label>
                                        <input type="email" name="email_aluno">
                                    </div>
                                    <div class="botao-cadastro">
                                        <button type="submit" name="cadastrar" class="botao">Cadastrar</button>
                                    </div>


                                </div>
                            </li>

                        </ul>
                    </div>
                </form>
            </nav>
            <div>


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