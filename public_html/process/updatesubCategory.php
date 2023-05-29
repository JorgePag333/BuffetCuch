<?php
include '../library/configServer.php';
include '../library/consulSQL.php';

$codeOldCatUp=consultasSQL::clean_string($_POST['categ-code-old']);
$nameCatUp=consultasSQL::clean_string($_POST['categ-name']);
$descCatUp=consultasSQL::clean_string($_POST['categ-descrip']);
$consultaCat= ejecutarSQL::consultar("select CodigoCat from subcategorias where NumCat=$codeOldCatUp");
$codecat=mysqli_fetch_array($consultaCat);
$codecat1= $codecat['CodigoCat'];
if(consultasSQL::UpdateSQL("subcategorias", "NombreCat='$nameCatUp',CodigoCat='$codecat1'", "NumCat='$codeOldCatUp'")){
    echo '<script>
        swal({
          title: "Categoría actualizada",
          text: "Los datos de la categoría se actualizaron con éxito",
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
