<?php
 $server= "localhost";
 $user="root";
 $pass="";
 $bd ="clientes";

 //Garantir que está conectado.
 if(mysqli_connect($server, $user, $pass, $bd)){
    echo "Conectado!";
 }else{
     echo "Erro";
 }
?>