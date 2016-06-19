<?php
    include("conexion.php");
    $conectar = mysql_connect($host, $user, $pw) or die ("Problemas de server.");
    mysql_select_db($db, $conectar) or die ("Problemas de DDBB.");

    $consulta = mysql_query("SELECT ID FROM codigof WHERE NOMBRE='$_POST[nombre]'", $conectar) or die ("Problemas en consulta: ". mysql_error());
    if($registro = mysql_fetch_array($consulta)){
        mysql_query("DELETE FROM codigof WHERE NOMBRE = '$_POST[nombre]'", $conectar);
        echo "Datos eliminados.";
    }else{
        echo "Datos no eliminados.";
    }
?>