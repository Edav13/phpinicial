<?php
    include("conexion.php");
    if (isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['user']) && !empty($_POST['user']) && isset($_POST['pw']) && !empty($_POST['pw']) && isset($_POST['pw2']) && !empty($_POST['pw2']) && isset($_POST['email']) && !empty($_POST['email']) && ($_POST['pw2'] == $_POST['pw'])) {
            $conectar = mysql_connect($host, $user, $pw) or die ("Problemas de server.");
            mysql_select_db($db, $conectar) or die ("Problemas de DDBB.");
            $consulta = mysql_query("INSERT INTO registro (NOMBRE, USER, PW, EMAIL) VALUES ('$_POST[nombre]', '$_POST[user]', '$_POST[pw]', '$_POST[email]')", $conectar) or die ("Problemas en insertado: ". mysql_error());
            echo "Datos guardados <br>";
            echo "Nombre:".$_POST['nombre']."<br>";
            echo "Usuario:".$_POST['user']."<br>";
            echo "Password:".$_POST['pw']."<br>";
            echo "E-mail:".$_POST['email'];

    }else{
        echo "Verifica que llenaste los campos y los passwords coinciden";
    }

    

    
?>