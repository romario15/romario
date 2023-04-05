<?php

    include('protecao.php');

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste PHP</title>

    <style type="text/css" media="all">
        @import url("../_css/index.css");
        </style>



</head>
<body>
  

  <div class="divisao">


  <?php 

    

    require_once "conexao01.php";

// Recebe os dados do formulário com a variável $_POST 
$nome = $_POST['nome']; 
$endereco = $_POST['endereco']; 
$sexo = $_POST['sexo']; 
$faixa = $_POST['faixa']; 
$cidade = $_POST['cidade']; 
 
  
  //conexÃ£o e seleção do banco de dados 
  $con = novaConexao();

   
  //executa a consulta 
   
  $query  =  "INSERT  INTO  cliente  (nome,  endereco,  sexo,  faixa, 
cidade) VALUES ('$nome','$endereco','$sexo','$faixa','$cidade')"; 
  
  $insert = mysqli_query($con,$query); 
   
  if($insert){ 
          echo "Cliente cadastrado com sucesso <p>"; 
        }else{ 
          echo"Erro"; 
    } 
//Exibe os dados na página de resposta: RespForm1.php 
echo utf8_encode("Os dados recebidos do formulário são: <p>"); 



echo (    " 

<table width = '400' border='1' cellspacing='0' cellpadding='0'> 
  <tr> 
  <td width = '100'>Nome: <td> 
  <td width = '300'>$nome</td> 
  </tr> 
  <tr> 
  <td width = '100'>Endereço :<td>
  <td width = '300'>$endereco</td> 
  </tr> 
  <tr> 
  <td width = '100'>Sexo :<td> 
  <td width = '300'>$sexo</td> 
  </tr> 
  <tr> 
  <td width = '100'>Faixa etária :<td> 
  <td width = '300'>$faixa</td> 
  </tr> 
  <tr> 
  <td width = '100'>Cidade :<td> 
  <td width = '300'>$cidade</td> 
  </tr> 
  </table> 
 "); 

$con->close();

    

  ?> 


  </div>

<a href='home.php'><button>Home</button></a>

                    <form action="logout.php">
                    <button>Sair</button></a>
                    </form>    



  </body> 
</html>




