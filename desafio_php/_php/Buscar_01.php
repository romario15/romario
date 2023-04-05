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


// Recebe os dados do formulário com a variável $_POST 
$nome = $_POST['nome'];

  
  //conexÃ£o e seleção do banco de dados 
  $con = novaConexao();

   
  //executa a consulta 
   
  $query  =  "SELECT * FROM cliente WHERE nome = '$nome' "; 
  
  $resultado = mysqli_query($con,$query); 
   
  if($resultado){ 
          echo "Busca obtida com Sucesso <p>"; 
        }else{ 
          echo"Erro"; 
    } 

//Exibe os dados na página de resposta: BuscaForm1.php 

echo utf8_encode("Os dados recebidos do formulário são :");    




    ?>


            <form name="alterar_01" method="POST" action="listagem.php"> 
                <p><input type="submit" value="Alterar"></p> 
                    </form>  



    <?php





    while($linha = mysqli_fetch_assoc($resultado)){

        ?>
               
        <table width = '400' border='1' cellspacing='0' cellpadding='0'> 
          <tr> 
          <td width = '100'>Nome :<td> 
          <td width = '300'> <?php echo $linha["nome"] ?></td> 
          </tr> 
          <tr> 
          <td width = '100'>Endereço :<td>
          <td width = '300'> <?php echo $linha["endereco"] ?></td> 
          </tr> 
          <tr> 
          <td width = '100'>Sexo :<td> 
          <td width = '300'> <?php echo $linha["sexo"] ?></td> 
          </tr> 
          <tr> 
          <td width = '100'>Faixa etária:<td> 
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
            <main>  
                <div>
                    <form action="home.php">
                    <button>Home</button></a>
                    </form>    
                </div>
                <form action="logout.php">
                    <button>Sair</button></a>
                    </form>    

            </main>
            
</body>
</html>




