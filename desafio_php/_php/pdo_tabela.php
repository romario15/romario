<?php


    require_once "conexao01.php";

    $query = 'create table if not exists cliente (
        
                id_cliente int not null auto_increment,
                nome varchar(50) not null,
                endereco varchar(100) not null,
                sexo varchar(10) not null,
                faixa varchar(12) not null,
                cidade varchar(30),
                primary key (id_cliente)
                
            )';

    $conexao = novaConexao();
    $retorno = $conexao->execute_query($query);

    echo $retorno;

?>