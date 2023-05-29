<!DOCTYPE html>
 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Recupero de contrase&ntilde;a</title>
    <?php require_once '../inc/link.php';?>
</head>
<body>
    <div>
    <a href="../index.php" class="btn btn-lg btn-primary">Regresar <i class="fa fa-mail-reply"></i></a> 
</div>
    <form action="../../Mercadopago/correo2.php" method="post">
        <table>
            <tr>
                <td>
                    <label for="username">Por favor, ingrese su nombre de usuario</label>
                </td>
                <td>
                    <input type="text" name="username" id="username">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Recuperar contrase&ntilde;a">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>