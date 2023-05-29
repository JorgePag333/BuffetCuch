<?php
session_start();
include '../library/configServer.php';
include '../library/consulSQL.php';

$codeCateg=consultasSQL::clean_string($_POST['categ-code']);


    if(consultasSQL::DeleteSQL('adereso', "indice='".$codeCateg."'")){
        echo '<script>
		    swal({
		      title: "Adereso eliminado",
		      text: "El adereso se eliminó con éxito",
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
