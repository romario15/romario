<?php

    include('protecao.php');

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<?php 

    require_once "conexao01.php";

  
  //conexão e sele��o do banco de dados 
  $con = novaConexao();

   
  //executa a consulta 
   
  $query  =  "SELECT * FROM cliente WHERE nome = 'Gabriel Luna'"; 
  
  $resultado = mysqli_query($con,$query); 
   
  if($resultado){ 
          echo "Busca obtida com Sucesso <p>"; 
        }else{ 
          echo"Erro"; 
    } 

//Exibe os dados na p�gina de resposta: BuscaForm1.php 

    echo "Os dados recebidos do formul�rio s�o :" ;

    while($linha = mysqli_fetch_assoc($resultado)){

        ?>
               
        <table width = '400' border='1' cellspacing='0' cellpadding='0'> 
          <tr> 
          <td width = '100'>Nome :<td> 
          <td width = '300'> <?php echo $linha["nome"] ?></td> 
          </tr> 
          <tr> 
          <td width = '100'>Endere�o :<td>
          <td width = '300'> <?php echo $linha["endereco"] ?></td> 
          </tr> 
          <tr> 
          <td width = '100'>Sexo :<td> 
          <td width = '300'> <?php echo $linha["sexo"] ?></td> 
          </tr> 
          <tr> 
          <td width = '100'>Faixa et�ria:<td> 
          <td width = '300'> <?php echo $linha["faixa"] ?></td> 
          </tr> 
          <tr> 
          <td width = '100'>Cidade :<td> 
          <td width = '300'> <?php echo $linha["cidade"] ?></td> 
          </tr> 
           
          </table>

        <?php

    }
     


?>

<a href='index.php'><button>Home</button></a>

                    <form action="logout.php">
                    <button>Sair</button></a>
                    </form>    



</body>
</html>




