<?php

if(!isset($_SESSION)){

    session_start();
} 



if(!isset($_SESSION['id_session'])) {

    die("<p><h2>Efetue o login para acessar. <h2></p> <p><h1><a href=\"../index.php\">Efetuar login.</a><h1></p>");
   
} 

?>
