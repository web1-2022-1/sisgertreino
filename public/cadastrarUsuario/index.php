<?php 

    require_once '../../Crud/Instrutor/CrudInstrutor.php';
    require_once '../../Crud/Login/CrudLogin.php';
    require_once '../../Crud/Contato/CrudContato.php';


    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
        <link rel="stylesheet" href="../../css/css cadastrar/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Andika&display=swap" rel="stylesheet">

        <title>PoriGYM</title>

    </head>

    <body>
        <?php

            $instrutor= new CrudInstrutor;
            $login= new CrudLogin;
            $contato= new CrudContato;

            if(isset($_POST['cadastrar'])):
                
                $login->setUsuario($_POST['user']);
                $login->setSenha($_POST['pass']);
                $login->insert();

                $fk_login=$login->getIdLogin();

                $instrutor->setCpf_instrutor($_POST['cpf']);
                $instrutor->setNome($_POST['nome']);
                $instrutor->setDt_nascimento($_POST['data']);
                $instrutor->setFk_login($fk_login->id_login);
                $instrutor->insert();

                $contato->setTelefone($_POST['tel']);
                $contato->setEmail($_POST['email']);
                $contato->setCpf_instrutor($_POST['cpf']);
                $contato->insert();
                
             endif;
        ?>

        <main>
            
            <div class="main-cadastro">
                <h1 class="login-title">Cadastro</h1>
                <form action="" method='POST'>
                    <div class="campo-texto">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome">
                    </div>
                    <div class="campo-texto">
                        <label for="usuario" class="pass">Usuario</label>
                        <input type="text" name="user">                               
                    </div>
                    <div class="campo-texto">
                        <label for="Cpf">CPF</label>
                        <input type="text" name="cpf">
                    </div>
                    <div class="campo-texto">
                        <label for="dt_nascimento">Data de Nascimento</label>
                        <input type="date" name="data">
                    </div>
                    <div class="campo-texto">
                        <label for="telefone">Telefone</label>
                        <input type="text" name="tel">
                    </div>
                    <div class="campo-texto">
                        <label for="email">E-mail</label>
                        <input type="text" name="email">
                    </div>
                    <div class="campo-texto">
                        <label for="senha">Senha</label>
                        <input type="password" name="pass">
                    </div>
                    <div class="botao-cadastro">
                        <button type="submit" name="cadastrar" class="botao">Cadastrar</button>
                    </div>
                </form>
            </div>

        </main>

        <asideL>

        <div class="cont_esq">
                <img src="../../css/css dashboard/img/logo_braco.png" height="120px">
                <h3 id="text_logo">PoriGYM</h3>
            </div>

            <div class="but_esq">
                <ul>
                    <li class="list">
                        <a href="../dashboard/index.php" class="caixaLateral">
                            <span class="icon"><ion-icon name="home-outline">Home</ion-icon></span>
                            <span class="title">Home</span>
                        </a>
                    </li>               
                </ul>
            </div>
            <div class="but_esq">
                <ul>                   
                    <li class="list">
                        <p class="space">
                            <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                            <span class="title">Usuário</span>
                        </p>  
                    </li>               
                    <li class="list_inside">
                        <a href="../cadastrarUsuario/index.php" class="caixaLateral">                       
                            <span class="title_inside">Cadastrar usuário</span>
                        </a>
                    </li>
                    <li class="list_inside">
                        <a href="#" class="caixaLateral">                           
                            <span class="title_inside">Editar usuário</span>
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
                            <span class="icon"><ion-icon name="barbell-outline"></ion-icon></span>
                            <span class="title">Treino</span>
                        </p>  
                    </li>               
                    <li class="list_inside">
                        <a href="#" class="caixaLateral">                       
                            <span class="title_inside">Criar treinos</span>
                        </a>
                    </li>
                    <li class="list_inside">
                        <a href="#" class="caixaLateral">                           
                            <span class="title_inside">Alterar treinos</span>
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
                            <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>                       
                            <span class="title">Sair</span>
                        </a>
                    </li>                   
                </ul>    
            </div>
            

        </asideL>

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>

        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </body>

    </html>