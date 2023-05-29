<?php
include './library/configServer.php';
include './library/consulSQL.php';

?>
<?php
session_start();
error_reporting(E_PARSE);
$pi = consultasSQL::clean_string($_GET['subCat']);
$CodigoProducto = consultasSQL::clean_string($_GET['codigoProd']);
$precio=0;
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Productos</title>
    <?php include './inc/link.php'; ?>
</head>

<body id="container-page-product">
    <header>
        <?php include './inc/navbar.php'; ?>
    </header>

    <section id="infoproduct">
        <div class="conteiner">
            <div class="conteiner-fluid">
                <div class="row">
                    <div class="col-sm-5" style="margin-left: 30px; margin-right: 30px;">
                        <div class="page-header">
                            <h1>Crear Combo <small class="tittles-pages-logo">Buffet del CUCh Online</small></h1>
                        </div>
                     <?php   if($_SESSION['UserType']=="Admin" || $_SESSION['UserType']=="User"){ 
                                
                        
                        
                        ?>
                        <form action="process/carrito2.php" method="POST" class="FormCatElec" data-form="">
                            <input type="hidden" name="combo-idProd" value="<?php echo $CodigoProducto; ?>">
                            <label class="te">Seleccione los Ingredientes</label>
                            <?php
                            $consultaCat = ejecutarSQL::consultar("select * from adicionales where CodigoSubCat=$pi");
                            $totalCAT = mysqli_num_rows($consultaCat);

                            if ($totalCAT > 0) {
                                while ($fila3 = mysqli_fetch_array($consultaCat)) {

                                    echo '
                                    <div class="caption" >
                                    <label style="color: black; padding: 2px"><input class="mycheck" type="checkbox" id="' . $fila3['precioAd'] . '" name="check_lista[]" value="' . $fila3['indi'] . '">' . $fila3['nombre'] . '</label>
                                    </div>
                                    
                                    ';
                                }
                            }
                           
                        $consul = ejecutarSQL::consultar("select * from adereso where CodigoSubCat=$pi");
                        $totCaT= mysqli_num_rows($consul);

                        if($totCaT >0){
                            while ($fila3 = mysqli_fetch_array($consul)) {

                                echo '
                                <div class="caption" >
                                <label style="color: black; padding: 2px"><input class="mycheck" type="checkbox" id="' . $fila3['precioCat'] . '" name="check_lista1[]" value="' . $fila3['indice'] . '">' . $fila3['tipo'] . '</label>
                                </div>
                                
                                ';
                            }
                        }

                        ?>
                        <br><br><br> <br><br><br>
                    </div>
                    <div class="col-sm-5">
                        <?php
                        $consultaCat = ejecutarSQL::consultar("select Imagen from producto where CodigoProd=$CodigoProducto");
                        $totalCAT = mysqli_num_rows($consultaCat);

                        if ($totalCAT > 0) {
                            while ($fila = mysqli_fetch_array($consultaCat)) {
                                if ($fila['Imagen'] != "" && is_file("./assets/img-products/" . $fila['Imagen'])) {
                                    $imagenFile = "./assets/img-products/" . $fila['Imagen'];
                                } else {
                                    $imagenFile = "./assets/img-products/default.png";
                                }
                            }
                        }
                        echo '
                            <br><br><br>   <br><br><br><br><br><br>   <br><br><br>
                            <img class="img-responsive" src="' . $imagenFile . '">
                            ';
                        
                  

                        ?>
                        <label class="te"  >Ingrese el horario del Pedido</label>
                        <p style="color: black; padding: 2px">(tiempo minimo de elavoracion 40min aprox)</p>
                        <input type="datetime-local" name="horario">
                        <div style="display:flex ;">
                        <strong><h2>Total:$</h2></strong> <strong><h2 class="caption" id="precio"></h2></strong>
                        
                        </div>
                        <button class="btn-lg btn-primary"><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp; Añadir al carrito</button>
                        </form>
                  <?php  } else{
                    echo '
                    <input type="hidden" name="combo-idProd" value="<?php echo $CodigoProducto; ?>">
                    <label class="te">Seleccione los Ingredientes</label>';
                    
                    $consultaCat = ejecutarSQL::consultar("select * from adicionales where CodigoSubCat=$pi");
                    $totalCAT = mysqli_num_rows($consultaCat);

                    if ($totalCAT > 0) {
                        while ($fila3 = mysqli_fetch_array($consultaCat)) {

                            echo '
                            <div class="caption" >
                            <label style="color: black; padding: 2px"><input class="mycheck" type="checkbox" id="' . $fila3['precioAd'] . '" name="check_lista[]" value="' . $fila3['indi'] . '">' . $fila3['nombre'] . '</label>
                            </div>
                            
                            ';
                        }
                    }
                    ?>
                

               
                <br><br><br> <br><br><br>
            </div>
            <div class="col-sm-5">
                <?php
                $consultaCat = ejecutarSQL::consultar("select Imagen from producto where CodigoProd=$CodigoProducto");
                $totalCAT = mysqli_num_rows($consultaCat);

                if ($totalCAT > 0) {
                    while ($fila = mysqli_fetch_array($consultaCat)) {
                        if ($fila['Imagen'] != "" && is_file("./assets/img-products/" . $fila['Imagen'])) {
                            $imagenFile = "./assets/img-products/" . $fila['Imagen'];
                        } else {
                            $imagenFile = "./assets/img-products/default.png";
                        }
                    }
                }
                echo '
                    <br><br><br>   <br><br><br><br><br><br>   <br><br><br>
                    <img class="img-responsive" src="' . $imagenFile . '">
                    ';
                
          

                ?>
                <div style="display:flex ;">
                <strong><h2>Total:$</h2></strong> <strong><h2 class="caption" id="precio"></h2></strong>
                
                </div>
            <p class="text-center"><small>Para agregar productos al carrito de compras debes iniciar sesion</small></p><br>
            <button class="btn btn-lg btn-raised btn-info btn-block" data-toggle="modal" data-target=".modal-login"><i class="fa fa-user"></i>&nbsp;&nbsp; Iniciar sesion</button>
<?php



                  }
                  
                  
                  
                  
                  ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include './inc/footer.php'; ?>
</body>

</html>