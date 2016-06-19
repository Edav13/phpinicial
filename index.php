<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
</head>
<body>

    <form action="procesar.php" method="post" accept-charset="utf-8" name="calc">
        <input type="text" name="c1"><br>
        <input type="text" name="c2"><br>
        <input type="text" name="c3"><br>
        
        <label>Selecciona la operación: <br></label>
        <select name="lista">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select>
        <br>
        <input type="submit" value="Ver resultados">
    </form>
</body>
</html>