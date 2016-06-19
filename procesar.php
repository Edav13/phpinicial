<?php
    session_start();
    include("conexion.php");
    if (isset($_POST['user']) && !empty($_POST['user']) && isset($_POST['pw']) && !empty($_POST['pw'])) {
            $conectar = mysql_connect($host, $user, $pw) or die ("Problemas de server.");
            mysql_select_db($db, $conectar) or die ("Problemas de DDBB.");
            $consulta = mysql_query("SELECT USER, PW FROM registro WHERE USER='$_POST[user]'", $conectar) or die ("Problemas en consutal: ". mysql_error());
            $sesion = mysql_fetch_array($consulta);

            if ($_POST['pw'] == $sesion['PW']) {
                $_SESSION['username'] = $_POST['user'];
                echo "sesion exitosa";
                
            }else{
                echo "combinacion erronea.";
            }

    }else{
        echo "Debes llenar ambos campos";
    }

    

    
?>