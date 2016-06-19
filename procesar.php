<?php
    include("conexion.php");
    if(isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['pw']) && !empty($_POST['pw']))
    {
        $conectar = mysql_connect($host, $user, $pw) or die ("Problemas de conexion.");
        mysql_select_db($db, $conectar) or die ("Problemas de conexion.");
        mysql_query("INSERT INTO codigof (NOMBRE, PW) VALUES ('$_POST[nombre]', '$_POST[pw]')", $conectar);
        echo "Datos insertados.";
    }else{
        echo "Completar campos.";
    }
?>