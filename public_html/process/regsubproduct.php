<?php
    session_start();
    include '../library/configServer.php';
    include '../library/consulSQL.php';

    $codeProd=consultasSQL::clean_string($_POST['prod-codigo']);
    $nameProd=consultasSQL::clean_string($_POST['prod-name']);
    $modelProd=consultasSQL::clean_string($_POST['prod-model']);
    $marcaProd=consultasSQL::clean_string($_POST['prod-marca']);
    $priceProd=consultasSQL::clean_string($_POST['prod-price']);
    $descProd=consultasSQL::clean_string($_POST['prod-desc-price']);
    $stockProd=consultasSQL::clean_string($_POST['prod-stock']);
    $codePProd=consultasSQL::clean_string($_POST['prod-codigoP']);
    // $estadoProd=consultasSQL::clean_string($_POST['prod-estado']);
    // $adminProd=consultasSQL::clean_string($_POST['admin-name']);

    // $subcateProd=consultasSQL::clean_string($_POST['prod-Subcat']);
       // $cateProd=consultasSQL::clean_string($_POST['prod-categoria']);
  
 

    if($codeProd!="" && $nameProd!="" && $priceProd!="" && $modelProd!="" && $marcaProd!="" && $stockProd!="" && $codePProd!=""){
        $verificar=  ejecutarSQL::consultar("SELECT * FROM subproductos WHERE CodigoSub='".$codeProd."'");
        $verificaltotal = mysqli_num_rows($verificar);
        if($verificaltotal<=0){{
                        if(consultasSQL::InsertSQL("subproductos", "CodigoSub, NombreSub, CodigoProd, Precio, Descuento, Modelo, Marca, Stock", 
                                                               "'$codeProd','$nameProd','$codePProd','$priceProd', '$descProd', '$modelProd','$marcaProd','$stockProd'")){
                            echo '<script>
                                swal({
                                  title: "Producto registrado",
                                  text: "El producto se añadió a la tienda con éxito",
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
                    }
                    
                
          
        }else{
            echo '<script>swal("ERROR", "El código de producto que acaba de ingresar ya está registrado en el sistema, por favor ingrese otro código de producto distinto", "error");</script>';
        }
    }else {
        echo '<script>swal("ERROR", "Los campos no deben de estar vacíos, por favor verifique e intente nuevamente", "error");</script>';
    }