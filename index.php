<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
</head>
<body>

    <?php
        echo "<br/>hola";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;mi nombre es Edav<br>";
        $numero = 50;
        $texto = "<br>Esto es una prueba. ";
        $booleano = false;
        echo $numero;
        echo $texto;
        echo $booleano;
        define("saludo", "<p>Hola, como estas? ");
        define("number", 20);
        echo saludo . "tengo ".number." años<p>";
        //arrays predefinidos
        $array = array('elemento1', 2 , "elemento 3" );
        echo $array[2];
        //arrays asociados o personalizados
        $asociativo = array('clave1' => "elemento 1", 'clave2' => 2);
        echo "<p>";
        echo $asociativo["clave2"];
        echo "<p>operaciones<br>";
        $numero = 4 + 4;
        $multiplicacion = $numero * 3;
        echo $numero . "<br>".$multiplicacion;
        echo "<p>conquetanacion<br>";
        $texto = "yo ";
        $texto .= "tengo ";
        $texto .= "20 años ";
        echo $texto;
        echo "<p>comparacion<br>";
        echo (6 >= 0) . "<br>".(6<=0);
        @define();

        if(9==9){
        }elseif (3!=0) {            
        }else{}
        $numero = 0;
        while ( $numero <= 10) {
            echo $numero . " ";
            $numero ++;
        }
        echo "<p>";
        $numero = 11;
        do {
            echo $numero . " ";
            $numero ++;
        }while ( $numero <= 10);
        echo "<p>";
        for ($i=0; $i < 5; $i++) { 
            echo $i . " ";
        }
        echo "<p>";
        //predefinido
        foreach ($array as $key) {
            echo $key . " - ";
        }echo "<br>";
        //asociativo
        foreach ($asociativo as $claves => $elemento) {
            echo $claves . " = ".$elemento . " - ";
        }
        echo "<p></p>";
        $numero = 1;
        switch ($numero) {
            case 1: 
            echo "es uno";
            break;
            case 10: 
            echo "es diez";
            break;
            case 'hola': 
            echo "es hola";
            break;
            default:
            echo "no es ninguno";
            break;
        }
        echo "<p></p>";
        function funcion ($a, $b, $c)
        {
            $adicion = $a + $b + $c;
            $multiplicacion = $adicion * 2;
            return $multiplicacion;
        }
        echo funcion(5, 2, 2);
    ?>
    <form action="procesar.php" method="post" accept-charset="utf-8" name="frm">
        <input type="text" name="nombre">
        <input type="text" name="apellido">
        <input type="password" name="pw">
        <input type="submit" name="Enviar">
    </form>
</body>
</html>