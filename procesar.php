<?php
    if(isset($_POST['c1']) && !empty($_POST['c1']) &&isset($_POST['c2']) && !empty($_POST['c2']) && isset($_POST['c3']) && !empty($_POST['c3']) ){

        $operacion = $_POST['lista'];
        echo "El resultado es: ";
        switch($operacion)
        {
            case 'suma':
            echo $_POST['c1'] + $_POST['c2'] + $_POST['c3'];
            break;
            case 'resta':
            echo $_POST['c1'] - $_POST['c2'] - $_POST['c3'];
            break;
            case 'multiplicar':
            echo $_POST['c1'] * $_POST['c2'] * $_POST['c3'];
            break;
            case 'dividir':
            echo $_POST['c1'] / $_POST['c2'] / $_POST['c3'];
            break;
            default:
            echo "No se realizo la operacion.";
            break;
        }
    }else{
        echo "Debes insertar todos los campos. ";
    }
?>