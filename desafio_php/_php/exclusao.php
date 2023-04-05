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

        
      //conexÃ£o e seleção do banco de dados 
        $con = novaConexao();


       

      //exclução de cliente

        if ( isset($_POST["nome"])){
            $id = $_POST["id_cliente"];
            $excluir = "DELETE FROM cliente WHERE id_cliente = {$id}";
            $operacao_exclusao = mysqli_query($con,$excluir);
                
            echo '<script>alert("cliente excluído!")</script>';


            if ($operacao_exclusao) {
                header("location:listagem_exclusao.php");
            } else {

                echo "Erro no banco ";
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
        <form action="exclusao.php" method="post">
               
        <h2>

        <?php

         echo utf8_encode("Exclusão de clientes");

         ?>

        </h2>                
                                   
            <label for="nome">Nome :</label>
            <input type="text"  value="<?php echo $info_cliente["nome"]  ?>" name="nome" id="nome">

            <label for="faixa">Cidade :</label>
             <input type="text" value="<?php echo $info_cliente["cidade"]  ?>" name="cidade" id="cidade">

            <input type="hidden" value="<?php echo $info_cliente["id_cliente"]  ?>" name="id_cliente" id="id_cliente">
            <br>
            <input type="submit" value = "Excluir">
            <br>
            <br>
            </form>   
            
            
            <main>  
                <div>
                <form action="listagem_exclusao.php">
                    <button>Voltar</button></a>
                    </form>    
                <form action="home.php">
                    <button>Home</button></a>
                    </form>    
                </div>
                <form action="logout.php">
                    <button>Sair</button></a>
                    </form>    
                

            </main>
                
            </div>
        </main>

        
        
</body>
</html>




