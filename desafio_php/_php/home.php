<?php

    include('protecao.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>

    <style type="text/css" media="all">
        @import url("../_css/index.css");
        </style>


</head>
<body>
    
    <div class="divisao">

    <form name="cadastrar_01" method="POST" action="Insert_01.php"> 
        
  
    <h2> Oi,  <?php echo $_SESSION['nome_session']; ?> !</h2>                
        <h2> Cadastro de Clientes </h2>                

        <p class="texto ">Nome :<br> 
         <input class="input" type="text" name="nome" id="nome" size="30" 
        maxlength="30"></p> 

        <p class="texto">Endereço :<br>
         <input class="input" type="text" name="endereco" id="endereco" size="10" 
        maxlength="30"></p> 

        <p class="texto">Sexo:<br> 
         <input type="radio" name="sexo" value="Masculino">Masculino 
         <input type="radio" name="sexo" value="Feminino">Feminino</p>

        <p class="texto">Faixa etária:<br>
            <input type="checkbox" name="faixa" id="faixa" 
            value="adolescente">Adolescente 
             <input type="checkbox" name="faixa" id="faixa" 
            value="jovem">Jovem 
             <input type="checkbox" name="faixa" id="faixa" 
            value="adulto">Adulto</p> 

            <p class="texto">Cidade:<br> 
            <select name="cidade" id="cidade"> 
             <option value="vazio"> </option> 
             <option value="Aracaju">Aracaju, SE</option> 
             <option value="BeloHorizonte">Belo Horizonte, MG</option> 
             <option value="Brasí­lia">Brasí­lia, DF</option> 
             <option value="Cuiabá">Cuiabá, MT</option> 
             <option value="Maceió">Maceió, AL</option> 
             <option value="Recife">Recife, PE</option> 
             <option value="RioBranco">Rio Branco, AC</option> 
             <option value="RioJaneiro">Rio de Janeiro, RJ</option> 
             <option value="São Paulo">São Paulo, SP</option> 
            </select></p> 
            <p><input class="texto" type="submit" value="Cadastrar cliente"></p> 
            <input type='hidden' name='btn_cadastrar_01' value='1'> 
            </form>    


            <a  href='listagem.php'><button class="texto">Listar cliente</button></a>
            <br>
            <br>
            <a  href='../buscar_01.html'><button class="texto">Buscar cliente</button></a>
            <br>
            <br>
            <a  href='listagem_exclusao.php'><button class="texto">Apagar cliente</button></a>
            
                    <form action="logout.php">
                    <button>Sair</button></a>
                    </form>    
        </div>
            
</body>
</html>