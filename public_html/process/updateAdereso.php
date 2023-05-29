<?php
session_start();
include '../library/configServer.php';
include '../library/consulSQL.php';

$codeCateg=consultasSQL::clean_string($_POST['categ-code']);
$nameCateg=consultasSQL::clean_string($_POST['categ-name']);
$Categ=consultasSQL::clean_string($_POST['categ-cat']);
$subCateg=consultasSQL::clean_string($_POST['categ-subcat']);
$precio=consultasSQL::clean_string($_POST['categ-precioad']);

    if(consultasSQL::UpdateSQL("adereso", "tipo='$nameCateg', CodigoSubcat='$subCateg', CodigoCat='$Categ',precioCat='$precio'","indice='$codeCateg'")){
        echo '<script>
            swal({
              title: "Adereso registrado",
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

