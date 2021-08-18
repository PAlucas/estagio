<?php
 $server= "localhost";
 $user="root";
 $pass="";
 $bd ="produtos";

 //Garantir que está conectado.
 if($conn = mysqli_connect($server, $user, $pass, $bd)){
    echo "Conectado!";
 }else{
     echo "Erro";
 }
?>