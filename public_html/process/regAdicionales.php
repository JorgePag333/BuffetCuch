<?php
session_start();
include '../library/configServer.php';
include '../library/consulSQL.php';

$codeCateg=consultasSQL::clean_string($_POST['categ-code']);
$nameCateg=consultasSQL::clean_string($_POST['categ-name']);
$Categ=consultasSQL::clean_string($_POST['categ-cat']);
$subCateg=consultasSQL::clean_string($_POST['categ-subcat']);
$precio=consultasSQL::clean_string($_POST['categ-precioad']);

$verificar=ejecutarSQL::consultar("SELECT * FROM adicionales WHERE indi='".$codeCateg."'");
if(mysqli_num_rows($verificar)<=0){
    if(consultasSQL::InsertSQL("adicionales", "nombre, CodigoSubcat, CodigoCat,precioAd", "'$nameCateg','$subCateg','$Categ','$precio'")){
        echo '<script>
            swal({
              title: "Categoría registrada",
              text: "El adicional se registró con éxito en el sistema",
              type: "success",
              showCancelButton: true,
              confirmButtonClass: "btn-danger",
              confirmButtonText: "Aceptar",
              cancelButtonText: "Cancelar",
              closeOnConfirm: false,
              closeOnCancel: false
              },
              function(isConfirm) {
              if (isConfirm) {
                location.reload();
              } else {
                location.reload();
              }
            });
        </script>';
    }else{
       echo '<script>swal("ERROR", "Ocurrió un error inesperado, por favor intente nuevamente", "error");</script>'; 
    }
}else{
    echo '<script>swal("ERROR", "El código que ha ingresado ya se encuentra registrado en el sistema, por favor verifique e intente nuevamente", "error");</script>';
}
mysqli_free_result($verificar);