<?php
    $filename = $_POST['archivo'];
    unlink($filename);
    echo "Archivo eliminado con exito.";
?>