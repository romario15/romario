<?php


    require_once "conexao00.php";

    $query = 'create table if not exists usuarios (
        
                id_usuario int not null auto_increment,
                nome_usuario varchar(140) not null,
                email_usuario varchar(140) not null,
                senha_usuario varchar(16) not null,
                ip_usuario varchar(16),
                primary key (id_usuario)
                
            )';

    $conexao = conexaoLogin();
    $retorno = $conexao->execute_query($query);

    echo $retorno;

?>