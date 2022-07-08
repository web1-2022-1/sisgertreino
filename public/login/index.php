<?php

session_start();
ob_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once '../../Controller/Login/CrudLogin.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../css/css login/style.css">
    <title>PoryGYM || LOGIN</title>
</head>



<body>
    <div class="main-login">
        <div class="left-login">
            <div class="div-top">
                <img src="../../img/logo/logo_braco.png" alt="login-image1" class="image-top" width="200">
                <h1 id="porigym-title">PoriGYM</h1>
            </div>
                <img src="../../img/login-image/login-image1.png" alt="login-image2" class="image-bottom" width="200">
        </div>
        <div class="right-login">
            <?php 
            $dados= filter_input_array(INPUT_POST,FILTER_DEFAULT);

            if(!empty($dados['sendLogin'])){
                
                $login= new CrudLogin();
                $login->setUsuario($dados['usuario']);
                $login->setSenha($dados['senha']);
                if($login->findOne()!=false){
                    $teste=$login->findOne();
                    if($teste->senha==$login->getSenha()){
                        header("Location: ../dashboard/index.php");
                    }else{
                        $_SESSION['msg']= "<p style='color: #ff0000'>Senha invalida! </p>";
                    }
                }else
                    $_SESSION['msg']= "<p style='color: #ff0000'>Usuário ou Senha invalidos! </p>";
            }
            
            ?>
            <div class="login-card">
                <h1 class="login-title">Login</h1>
                <?php
                    if(isset($_SESSION['msg'])){
                        echo $_SESSION['msg']; 
                        unset($_SESSION['msg']);
                    }
                ?>
             
                <form action="" method="POST">
                    <div class="campo-texto">

                        <label for="usuario">Usuário</label>
                        
                        <input type="text" name="usuario">
                    </div>
                    <div class="campo-texto">
                        
                            <label for="senha" class="pass">Senha</label>
                       
                        <input type="password" name="senha">
                    </div>
                    <div class="botao-login">
                        <button type="submit" name="sendLogin" value="entrar" class="botao">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>