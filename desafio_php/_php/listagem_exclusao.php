<?php

    include('protecao.php');

?>
   
<?php 

require_once "conexao01.php";

//conexÃ£o e seleção do banco de dados 
$con = novaConexao();


//consulta ao banco de dados
  // tabela de clientes
   
$al = "SELECT * FROM cliente ";
$consulta_al = mysqli_query($con,$al);
if(!$con) {
die("erro no banco");
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exclusão</title>

<style type="text/css" media="all">
@import url("../_css/listagem.css");
</style>

</head>

<body>



<div id="janela_formulario">
       


    <main>  

    <h2 class="titulo">
        <?php
        echo utf8_encode("Exclusão  de clientes");
        ?>
    </h2>                

        <div id="janela_clientes">
        <?php
            while($linha = mysqli_fetch_assoc($consulta_al)) {
        ?>
    
            <input class="input_01" disabled="" type="text"  value="Nome :">
            <input  class="input_02" disabled="" type="text" 
            value="<?php echo $linha["nome"] ?>" name="nome" id="nome">
            <a class="shadow" href="exclusao.php?codigo=<?php echo $linha["id_cliente"] ?>">Apagar</a>
            <br>

            <input class="input_01" disabled="" type="text"  value="Endereço :">
            <input class="input_02" disabled="" type="text" 
            value="<?php echo $linha["endereco"] ?>" name="endereco" id="endereco">
            <br>

            <input class="input_01" disabled="" type="text"  value="Sexo :">
            <input class="input_02" disabled="" type="text" 
            value="<?php echo $linha["sexo"] ?>" name="sexo" id="sexo">
            <br>

            <input class="input_01" disabled="" type="text"  value="Faixa etária :">
            <input class="input_02" disabled="" type="text" 
            value="<?php echo $linha["faixa"] ?>" name="faixa" id="faixa">
            <br>

            <input class="input_01" disabled="" type="text"  value="Cidade :">
            <input class="input_02" disabled="" type="text" 
            value="<?php echo $linha["cidade"] ?>" name="cidade" id="cidade">
            <br>
            <br>


            <?php
            }
            ?>
        </div>

    </main>

<a href='home.php'><button>Home</button></a>

                <form action="logout.php">
                    <button>Sair</button></a>
                </form>    



</body>
</html>





