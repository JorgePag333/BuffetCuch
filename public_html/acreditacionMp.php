<?php   
    session_start();
    include './library/configServer.php';
    include './library/consulSQL.php';
    $id=$_GET['preference_id'];
    $tipoenvio="mercadopago";
    $comprobanteF="sincomprobante";
    $Cedclien=$_SESSION['UserNIT'];
  if(!empty($_SESSION['carro'])){
    $StatusV="Acreditado, en espera de entrega";
    $suma = 0;
    foreach($_SESSION['carro'] as $codess){
        $consulta=ejecutarSQL::consultar("SELECT * FROM producto WHERE CodigoProd='".$codess['producto']."'");
        while($fila = mysqli_fetch_array($consulta, MYSQLI_ASSOC)) {
          $tp=number_format($fila['Precio'], 2, '.', '');
          $suma += $tp*$codess['cantidad'];
          $desacri= $fila['NombreProd'];
        }
        mysqli_free_result($consulta);
    }
    if(consultasSQL::InsertSQL("venta", "Fecha, NIT, TotalPagar, Estado, NumeroDeposito, TipoEnvio, Adjunto", "'".date('d-m-Y')."','$Cedclien','$suma','$StatusV','$id','$tipoenvio','$comprobanteF'")){

      /*recuperando el número del pedido actual*/
      $verId=ejecutarSQL::consultar("SELECT * FROM venta WHERE NIT='$Cedclien' ORDER BY NumPedido desc limit 1");
      $fila=mysqli_fetch_array($verId, MYSQLI_ASSOC);
      $Numpedido=$fila['NumPedido'];

      /*Insertando datos en detalle de la venta*/
      foreach($_SESSION['carro'] as $carro){
      		$preP=ejecutarSQL::consultar("SELECT * FROM producto WHERE CodigoProd='".$carro['producto']."'");
      		$filaP=mysqli_fetch_array($preP, MYSQLI_ASSOC);
          $pref=number_format($filaP['Precio'], 2, '.', '');
          	consultasSQL::InsertSQL("detalle", "NumPedido, CodigoProd, CantidadProductos, PrecioProd, NombreProd", "'$Numpedido', '".$carro['producto']."', '".$carro['cantidad']."', '$pref',' $desacri'");
          	mysqli_free_result($preP);

        /*Restando stock a cada producto seleccionado en el carrito*/
        $prodStock=ejecutarSQL::consultar("SELECT * FROM producto WHERE CodigoProd='".$carro['producto']."'");
        while($fila = mysqli_fetch_array($prodStock, MYSQLI_ASSOC)) {
            $existencias = $fila['Stock'];
            $existenciasRest=$carro['cantidad'];
            consultasSQL::UpdateSQL("producto", "Stock=('$existencias'-'$existenciasRest')", "CodigoProd='".$carro['producto']."'");
        }
      }
    }} 
      /*Vaciando el carrito*/
      unset($_SESSION['carro']);
     
    header("location: index.php");
?>