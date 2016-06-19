<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
</head>
<body>

    <form action="procesar.php" method="post" accept-charset="utf-8" name="frm">
    <table>
        <caption>Registro de usuarios</caption>
        <tbody>
            <tr>
                <td>NOMBRE:</td>
                <td><input type="text" name="nombre"></td>
            </tr>
            <tr>
                <td>USUARIO:</td>
                <td><input type="text" name="user"></td>
            </tr>
            <tr>
                <td>PASSWORD:</td>
                <td><input type="password" name="pw"></td>
            </tr>
            <tr>
                <td>CONFIRMAR PASSWORD:</td>
                <td><input type="password" name="pw2"></td>
            </tr>
            <tr>
                <td>E-MAIL:</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>
                   <input type="submit" value="Registrar"> 
                </td>
            </tr>
        </tbody>
    </table>
        
        
    </form>
</body>
</html>