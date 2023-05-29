<?php
session_start();
include '../library/configServer.php';
include '../library/consulSQL.php';
$codeOldProdUp=consultasSQL::clean_string($_POST['code-old-prod']);
$nameProdUp=consultasSQL::clean_string($_POST['prod-name']);
$modelProdUp=consultasSQL::clean_string($_POST['prod-model']);
$marcaProdUp=consultasSQL::clean_string($_POST['prod-marca']);
$priceProdUp=consultasSQL::clean_string($_POST['prod-price']);
$descProdUp=consultasSQL::clean_string($_POST['prod-desc-price']);
$stockProdUp=consultasSQL::clean_string($_POST['prod-stock']);
$proveProdUp=consultasSQL::clean_string($_POST['prod-codigoP']);



if(consultasSQL::UpdateSQL("subproductos", "NombreSub='$nameProdUp',CodigoProd='$proveProdUp',Precio='$priceProdUp',Marca='$marcaProdUp',Modelo='$modelProdUp',Stock='$stockProdUp',Descuento='$descProdUp'", "CodigoSub='$codeOldProdUp'")){
   echo '<script>
    swal({
      title: "Producto actualizado",
      text: "El producto se actualizo con éxito",
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