<?php

    function conectar (){

        $user="root";
        $pass="";
        $server="localhost";
        $db="medsan";

        $con=new mysqli($server,$user,$pass,$db);

        if ($con->connect_errno){
            return "Error en la conexion con la base de datos";
        }else{
            return "¡Conexion Exitosa!";
        }
    }

?>
