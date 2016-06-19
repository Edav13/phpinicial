<?php
    if (isset($_POST['asunto']) && !empty($_POST['asunto']) && isset($_POST['mensaje']) && !empty($_POST['mensaje'])) {
        
        $destino = "edav13@hotmail.com";
        $desde = "From: ". "CodigoFacilito";
        mail($destino, $_POST['asunto'], $_POST['mensaje'], $desde);
        echo "Correo enviado.";
    }else{
        echo "Problemas al enviar";
    }
?>