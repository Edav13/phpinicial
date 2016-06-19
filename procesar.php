<?php
    include("conexion.php");
    $conectar = mysql_connect($host, $user, $pw) or die ("Problemas de conexion.");
    mysql_select_db($db, $conectar) or die ("Problemas de conexion DDBB.");

    $consulta = mysql_query("SELECT * FROM codigof WHERE NOMBRE='$_POST[nombre]'") or die ("Problemas en consulta: ". mysql_error());
    while($registro = mysql_fetch_array($consulta)){
        echo $registro['NOMBRE']."<br>".$registro['PW']."<br>";
    }
?>