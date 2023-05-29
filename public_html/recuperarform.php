<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Recupero de contrase&ntilde;a</title>
    <?php require_once 'inc/link.php';?>
</head>
<body>
    <div>
    <a href="../index.php" class="btn btn-lg btn-primary">Regresar <i class="fa fa-mail-reply"></i></a> 
</div>
    <form action="correo2.php" method="post" target="_blank">
        <table>
            <tr>
                <div class="form-group label-floating">
                <td>
                    <label >se recuperara su contrasela:</label>
                </td>
                <td>
                  
                 
                                  <label class="control-label"><i class="fa fa-address-card-o" aria-hidden="true"></i>&nbsp; Ingrese su número de DNI</label>
                                  <input class="form-control" type="text" required name="username" pattern="[0-9]{1,15}" title="Ingrese su número de DNI. Solamente números" maxlength="15" >
                                
                
                
                
                
                
                </td>
                </div>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" >
                </td>
            </tr>
            
        </table>
    </form>
</body>
</html>