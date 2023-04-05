


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario cadastrado</title>

    <style type="text/css" media="all">
        @import url("../_css/index.css");
        </style>



</head>
<body>
  

  <div class="divisao">


  <?php 

// Recebe os dados do formulário com a variável $_POST 
$nome_user = $_POST['nome_cadastro']; 
$email_user = $_POST['email_cadastro']; 
$senha_user = $_POST['senha_cadastro']; 

if (isset($_POST['nome_cadastro']) || isset($_POST['email_cadastro']) || isset($_POST['senha_cadastro']) ) {

  if (strlen($_POST['nome_cadastro']) == 0) {
      echo  "<script>alert('Insira seu nome ...');</script>";
      echo  "<script>alert('Clique em Voltar ao Login ...');</script>";
      

  } else if (strlen($_POST['email_cadastro']) == 0) {
      echo  "<script>alert('Insira seu email ...');</script>";
      echo  "<script>alert('Clique em Voltar ao Login ...');</script>";
      

    } else if (strlen($_POST['senha_cadastro']) == 0) {
      echo  "<script>alert('Insira sua senha ...');</script>"; 
      echo  "<script>alert('Clique em Voltar ao Login ...');</script>";
      
 
  } else {

    require_once "conexao00.php";


    //conexÃ£o e seleção do banco de dados 
    $con = conexaoLogin();
  
    
    // coleta o IP do usuário
    $before_ip = $_SERVER['REMOTE_ADDR'];
  
    //insere dados do usuário e IP do usuário na tabela usuários
     
    $query  =  "INSERT  INTO  usuarios  (nome_usuario, email_usuario, senha_usuario, ip_usuario) VALUES ('$nome_user','$email_user','$senha_user','$before_ip')"; 
    
    $insert_usuario = mysqli_query($con,$query); 
  
     
    ?>
      <h1>
  
    <?php
  
  
    if($insert_usuario){ 
            echo "Cliente cadastrado com sucesso <p>"; 
          }else{ 
            echo"Erro"; 
      } 
  //Exibe os dados na página de resposta: RespForm1.php 
  echo utf8_encode("Os dados recebidos do formulário são: <p>"); 
  
  ?>
      </h1>
        
    <?php
  
  echo (    " 
  
  <table width = '400' border='1' cellspacing='0' cellpadding='0'> 
    <tr> 
    <td width = '100'>Nome: <td> 
    <td width = '300'>$nome_user</td> 
    </tr> 
    <tr> 
    <td width = '100'>Email :<td>
    <td width = '300'>$email_user</td>
    </tr> 
    </table> 
   "); 
  
  $con->close();
  




  }


}

  
  
    ?> 
  


  </div>

<a href='../index.php'><button>Voltar ao login</button></a>

                
  </body> 
</html>




