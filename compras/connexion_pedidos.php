<?php
 $server= "localhost";
 $user="root";
 $pass="";
 $bd ="pedidos";

 //Garantir que está conectado.
 if($con = mysqli_connect($server, $user, $pass, $bd)){
    echo "Conectado!";
 }else{
     echo "Erro";
 }
?>