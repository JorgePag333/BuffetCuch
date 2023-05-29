<?php
session_start();
error_reporting(E_PARSE);
include '../library/configServer.php';
include '../library/consulSQL.php';
include '../inc/link.php';
$arraylista=($_POST['check_lista']);
$codigo=consultasSQL::clean_string($_POST['combo-idProd']);
$horaPed=consultasSQL::clean_string($_POST['horario']);
$cantidad=1;
$arraylista1=($_POST['check_lista1']);
if (isset($arraylista)) {
    if (!empty($arraylista)) {
        // Contando el numero de input seleccionados "checked" checkboxes.
if (!empty($arraylista1)) {
    // Bucle para almacenar y visualizar valores activados checkbox.
    foreach ($arraylista as $seleccion) {
        foreach ($arraylista1 as $seleccion1) {
            if (empty($_SESSION['carro1'][$seleccion])) {
                $_SESSION['carro1'][$seleccion] = array(
                                                    'detalle' => $seleccion,
                                                    'Id' => $cantidad,
                                                    'horaPed' => $horaPed,
                                                    'detalleAd'=>$seleccion1
                                                    );
            }
        }
    }
}else{
    foreach ($arraylista as $seleccion) {
        if (empty($_SESSION['carro1'][$seleccion])) {
            $_SESSION['carro1'][$seleccion] = array(
                                                'detalle' => $seleccion,
                                                'Id' => $cantidad,
                                                'horaPed' => $horaPed
                                                
                                                );
        }
    }

}
        	echo '<script>
        swal({
        title: "Producto agregado",
        text: "Quieres ver el carrito de compras?",
        type: "info",
        showCancelButton: true,
        confirmButtonClass: "btn-success",
        cancelButtonClass: "btn-primary",
        confirmButtonText: "Si, ir al carrito",
        cancelButtonText: "No, seguir comprando",
        closeOnConfirm: false
        },
        function(){
            window.location="carrito.php";
        });
    </script>';
}else{
	echo '<script>
        swal({
        title: "ERROR",
        text: "El producto ya fue agregado al carrito. Quieres ver el carrito de compras?",
        type: "error",
        showCancelButton: true,
        confirmButtonClass: "btn-success",
        cancelButtonClass: "btn-primary",
        confirmButtonText: "Si, ver el carrito",
        cancelButtonText: "No, seguir comprando",
        closeOnConfirm: false
        },
        function(){
            window.location="carrito.php";
        });
    </script>';

    }
}

if(empty($_SESSION['carro2'][$codigo]))
{
	$_SESSION['carro'][$codigo] = array('producto' => $codigo, 
                                        'cantidad' => $cantidad

                                        );
	echo '<script>
        swal({
        title: "Producto agregado",
        text: "Quieres ver el carrito de compras?",
        type: "info",
        showCancelButton: true,
        confirmButtonClass: "btn-success",
        cancelButtonClass: "btn-primary",
        confirmButtonText: "Si, ir al carrito",
        cancelButtonText: "No, seguir comprando",
        closeOnConfirm: false
        },
        function(){
            window.location="carrito.php";
        });
    </script>';
}else{
	echo '<script>
        swal({
        title: "ERROR",
        text: "El producto ya fue agregado al carrito. Quieres ver el carrito de compras?",
        type: "error",
        showCancelButton: true,
        confirmButtonClass: "btn-success",
        cancelButtonClass: "btn-primary",
        confirmButtonText: "Si, ver el carrito",
        cancelButtonText: "No, seguir comprando",
        closeOnConfirm: false
        },
        function(){
            window.location="carrito.php";
        });
    </script>';
}

