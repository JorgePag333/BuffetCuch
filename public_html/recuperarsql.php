<?php
session_start();
 include 'inc/link.php';
 require_once "library/configServer.php";
 require_once "library/consulSQL.php";
if(isset($_GET['toc'])){
if ($_GET['toc']=== $_SESSION['token']) {
    $token2=$_GET['toc'];
      $usuario=$_GET['name'];  
        
        $sql = ejecutarSQL::consultar("SELECT * FROM cliente WHERE Nombre = '".$usuario."'");
        $comparar=mysqli_num_rows($sql);
        
        if ($comparar >0) {
            $comparar2=mysqli_fetch_array($sql);
            $id= $comparar2['NIT'];
            echo $comparar2['NIT'];
            
        echo '
        <h1>Bienvenido </h1>
        <form method="post" action="recuperarsql.php" class="FormCatElec">
            <input type="hidden"  name="id" value="'.$id.'" />
            <table>
                <tr>
                    <td><label for="newPassword">Ingresa tu nueva contrase&ntilde;a</label></td>
                    <td><input type="password" name="newPassword" id="newPassword"/></td>
                </tr>
                <tr>
                    <td><label for="newPassword">repita tu contrase&ntilde;a</label></td>
                    <td><input type="password" name="newPassword2" id="newPassword2"/></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Enviar"/>
                    </td>
                </tr>
            </table>
        </form
        ';
        
        }
}
}
    else{
    echo $_POST['newPassword'];
  echo $_POST['newPassword2']; 
$contra1=consultasSQL::clean_string($_POST['newPassword']);
echo $contra1;
$contra2=consultasSQL::clean_string($_POST['newPassword2']);
$id=$_POST['id'];

 echo $id;

if(isset($contra1) && isset($id)){
if ($contra1===$contra2) {
   $contra1= md5($contra2);
   echo $contra1;
   if(consultasSQL::UpdateSQL("cliente","Clave='$contra1'","NIT='$id'")){
        echo '<script>
		  swal({
		    title: "Datos actualizados",
		    text: "Tus datos han sido actualizados con éxito",
		    type: "success",
		    showCancelButton: true,
		    confirmButtonClass: "btn-success",
		    confirmButtonText: "Aceptar",
		    cancelButtonText: "Cancelar",
		    closeOnConfirm: false,
		    closeOnCancel: false
		    },
		    function(isConfirm) {
		    if (isConfirm) {
		         window.location.href= "https://ventasxt.ga/index.php";
		    } else {
		      location.reload();
		    }
		  });
		  </script>';
        session_destroy();
   }
}
}
    }
?>