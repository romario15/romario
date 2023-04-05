 

<?php

    require_once "_php/conexao00.php";

    //seleçãoe conexão  do banco de dados 
    $con = conexaoLogin();

    // coleta o IP do usuário
    $before_ip = $_SERVER['REMOTE_ADDR'];

   
    if (isset($_POST['email_usuario']) || isset($_POST['senha_usuario']) ) {

        if (strlen($_POST['email_usuario']) == 0) {
            echo  "<script>alert('Insira seu email ...');</script>";
        } else if (strlen($_POST['senha_usuario']) == 0) {
            echo  "<script>alert('Insira sua senha ...');</script>";
        } else {
            
            $email_user = mysqli_real_escape_string($con,$_POST['email_usuario']); 
            $senha_user = mysqli_real_escape_string($con,$_POST['senha_usuario']); 

            $sql_pesquisa = "SELECT * FROM usuarios WHERE email_usuario = '$email_user' AND senha_usuario = '$senha_user'";
            $sql_query = mysqli_query($con,$sql_pesquisa);
            
            $quatidade_linhas = $sql_query->num_rows;

            if ($quatidade_linhas == 1) {


                $usuario = mysqli_fetch_assoc($sql_query);

                if(!isset($_SESSION)){
                
                //cria sessão
                    session_start();
                } 
                               
                // atribui usuário id_usuario à sessão
                
                $_SESSION['id_session'] = $usuario['id_usuario'];
                $_SESSION['nome_session'] = $usuario['nome_usuario'];

                header("location:_php/home.php");
                                                
            } else {
                
                echo  "<script>alert('Email ou senha incorretos !');</script>";
                         

                }

            }

        }



?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style type="text/css" media="all">
        @import url("_css/login.css");
        </style>


</head>
<body>
     
<?php


?>

    <div class="divisao">
        <h1 class="titulo"> LOGIN</h1>
    <form action="" method="POST">
        <p>
            <label class="texto"> E-mail </label>
            <input class="input" type="text" name="email_usuario" id="email_usuario">
            </p>
        <p>
            <label class="texto"> Senha </label>
            <input class="input" type="password" name="senha_usuario" id="senha_usuario">
            </p>
        <p>
            <button class="btn btn-three" type="submit" > Entrar </button>
        </p>
                
    </form>
    <br>
    <br>
   
   
   
    <h1 class="titulo"> Primeiro acesso</h1>

    <form action="_php/Insert_usuario.php" method="POST">
        
        <p>
            <label class="texto"> Nome </label>
            <input class="input" type="text" name="nome_cadastro" id="nome_cadastro">
            </p>
        
        <p>
            <label class="texto"> E-mail </label>
            <input class="input" type="text" name="email_cadastro" id="email_cadastro">
            </p>
        <p>
            <label class="texto"> Senha </label>
            <input class="input" type="password" name="senha_cadastro" id="senha_cadastro">
            </p>
        <p>
            <button class="btn btn-three" type="submit" > Cadastrar </button>
            <input type='hidden' name='btn_cadastrar_user' value='1'> 
        </p>
                
    </form>

    </div>
     
</body>
</html>