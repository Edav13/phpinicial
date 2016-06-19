<?php
    $fi = fopen("archivo.txt","r")
    or die ("problemas al crear archivo.txt");
    while (!feof($fi)) 
    {
        $traer = fgets($fi);
        $saltodelinea = nl2br($traer);
        echo $saltodelinea;
    }
?>