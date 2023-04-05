<?php

    function conexaoLogin(){

        $hostname = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'login';
              

            $conexao = new mysqli($hostname, $username, $password, $dbname);
            
            return $conexao;
            
        if($conexao->connect_errno){
            
            echo "Erro na conexão ! <br>";
            echo "Erro: " . $$conexao->connect_error;
            
        }
           
        
    }
    

?>