<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
</head>
<body>

    <form action="procesar.php" method="post" accept-charset="utf-8" name="frm" enctype="multipart/form-data">
    <table>
        <caption>Enviar a correo</caption>
        <tbody>
            <tr>
                <td>Asunto:</td>
                <td><input type="text" name="asunto"></td>
            </tr>
            <tr>
                <td>Mensaje:</td>
                <td><textarea name="mensaje"></textarea></td>
            </tr>
            <tr>
                <td>
                   <input type="submit" value="Enviar correo"> 
                </td>
            </tr>
        </tbody>
    </table>
        
        
    </form>
</body>
</html>