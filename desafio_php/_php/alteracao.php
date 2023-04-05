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

    <style type="text/css" media="all">
    @import url("../_css/alteracao.css");
    </style>
 
</head>
<body>
  
<?php 


        require_once "conexao01.php";

        
      //conexão e seleção do banco de dados 
        $con = novaConexao();

        
        if (isset($_POST["nome"])) {

            $nome = $_POST["nome"];
            $endereco = $_POST["endereco"];
            $sexo = $_POST["sexo"];
            $faixa = $_POST["faixa"];
            $cidade = $_POST["cidade"];
            $id_cliente = $_POST["id_cliente"];

            //alteração

            $alterar  = "UPDATE cliente ";
            $alterar .= "SET ";
            $alterar .= " nome = '{$nome}',";
            $alterar .= " endereco = '{$endereco}',";
            $alterar .= " sexo = '{$sexo}',";
            $alterar .= " faixa = '{$faixa}',";
            $alterar .= " cidade  = '{$cidade}' ";
            $alterar .= " WHERE id_cliente = {$id_cliente}";

            $operacao_alteracao = mysqli_query($con,$alterar);

            if ($operacao_alteracao){
                header("location:listagem.php") ;
            } else {
                echo "Erro no banco";
            }

        }   
        


        //conexÃ£o e seleção do banco de dados 
        $con = novaConexao();

        //consulta ao banco de dados
        // tabela de clientes

    $resultado_02 = "SELECT * FROM cliente ";

    if ( isset($_GET["codigo"])){
        $id = $_GET["codigo"];
        $resultado_02 .= " WHERE id_cliente = {$id}";
    } else {

      $resultado_02 .= " WHERE id_cliente = 1";

    }

        $resultado = mysqli_query($con,$resultado_02); 
  
        if($resultado){ 
            $info_cliente = mysqli_fetch_assoc($resultado);
          }else{ 
            echo "Erro"; 
      } 

   
    ?>
    <main>  
        <div id="janela_formulario">
        <form action="alteracao.php" method="post">
                 
        <h2>

        <?php

         echo utf8_encode("Alteração de clientes");

         ?>

        </h2>                

                                    
            <label for="nome">Nome :</label>
            <input type="text" value="<?php echo $info_cliente["nome"]  ?>" name="nome" id="nome">

            <label for="endereco">Endereço :</label>
            <input type="text" value="<?php echo $info_cliente["endereco"]  ?>" name="endereco" id="endereco">
                    
            <label for="sexo">Sexo :</label>
            <input type="text" value="<?php echo $info_cliente["sexo"]  ?>" name="sexo" id="sexo">

            <label for="faixa">Faixa etária :</label>
             <input type="text" value="<?php echo $info_cliente["faixa"]  ?>" name="faixa" id="faixa">

            <label for="cidade">Cidade :</label>
            <input type="text" value="<?php echo $info_cliente["cidade"]  ?>" name="cidade" id="cidade">

            <input type="hidden" value="<?php echo $info_cliente["id_cliente"]  ?>" name="id_cliente" id="id_cliente">
            <br>
            <input class="texto"  type="submit" value = "Alterar">
            <br>
            <br>
            </form>   
            
            
            <main>  
                <div>
                    <form action="home.php">
                    <button class="texto" >Home</button></a>
                    </form>    
                    <form action="logout.php">
                    <button>Sair</button></a>
                    </form>    

                </div>
            </main>
                
            </div>
        </main>

        
        
</body>
</html>




