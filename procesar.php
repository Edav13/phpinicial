<?php

    include("conexion.php");
    $conectar = mysql_connect($host, $user, $pw) or die ("Problemas de server.");
    mysql_select_db($db, $conectar) or die ("Problemas de DDBB.");
    mysql_query("UPDATE registro set NOMBRE = '$_POST[nuevo]' WHERE NOMBRE = '$_POST[viejo]'", $conectar) or die ("Problemas en consutal: ". mysql_error());
    echo "Datos actualizados";
    

    
?>