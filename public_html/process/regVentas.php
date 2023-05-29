<?php 
session_start();
include '../library/configServer.php';
include '../library/consulSQL.php';
include '../inc/link.php';

if(isset($_POST['num-pedido'])){
    
$pedido=consultasSQL::clean_string($_POST['num-pedido']);
$consulta= ejecutarSQL::consultar("select * from venta where NumPedido = $pedido");
$totalproductos = mysqli_num_rows($consulta);
     if($totalproductos>0){
      while($fila=mysqli_fetch_array($consulta)){
      $consulta1= ejecutarSQL::consultar("select * from detalle where NumPedido = $pedido");
       while($fila1=mysqli_fetch_array($consulta1)){
           
        
        $NumPedido=$fila['NumPedido'];
        
        $Fecha=$fila['Fecha'];
        
        $NIT=$fila['NIT'];
        
        $TotalPagar=$fila['TotalPagar'];
        
        $Estado=$fila['Estado'];
    
        $NumeroDeposito=$fila['NumeroDeposito'];
    
        $TipoEnvio=$fila['TipoEnvio'];
        
        $Adjunto=$fila['Adjunto'];
        
        $CantidadProductos=$fila1['CantidadProductos'];
        
        $CodigoProd=$fila1['CodigoProd'];
        
        $NombreProd=$fila1['NombreProd'];
    
        $PrecioProd=$fila1['PrecioProd'];
        
        $OrdenDeCompra=$fila1['OrdenDeCompra'];
    
        $pate=$fila['Patente'];
        
           if(consultasSQL::InsertSQL("registroDeVentas","NumPedido,Fecha,NIT,TotalPagar,Estado,NumeroDeposito,TipoEnvio,Adjunto,CantidadProductos,CodigoProd,NombreProd,PrecioProd,OrdenDeCompra,Patente","'$NumPedido','$Fecha','$NIT','$TotalPagar','$Estado','$NumeroDeposito','$TipoEnvio','$Adjunto','$CantidadProductos','$CodigoProd','$NombreProd','$PrecioProd','$OrdenDeCompra','$pate'")){
                 echo '<script>
                                swal({
                                  title: "Producto registrado",
                                  text: "El producto se añadió a la tienda con éxito",
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
           }else{
               echo '<script>swal("ERROR", "Ocurrió un error inesperado, por favor intente nuevamente", "error");</script>';
           }
           
       }


}
}
}else{
               echo '<script>swal("ERROR", "Ocurrió un error inesperado, por favor intente ", "error");</script>';
           }
?>