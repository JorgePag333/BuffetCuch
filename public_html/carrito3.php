<?php 
    session_start(); 
    error_reporting(E_PARSE);
?>
<div  style="background-color: green;">
                    <?php
                        require_once "library/configServer.php";
                        require_once "library/consulSQL.php";
                        if(!empty($_SESSION['carro'])){
                            $suma = 0;
                            $sumaA = 0;
                            echo '<table class="table table-bordered table-hover"><thead><tr class="bg-success"><th>Nombre</th><th>Precio</th><th>Cantidad</th><th>Subtotal</th><th>Acciones</th></tr></thead>';
                            foreach($_SESSION['carro'] as $codeProd){
                                $consulta=ejecutarSQL::consultar("SELECT * FROM producto WHERE CodigoProd='".$codeProd['producto']."'");
                                while($fila = mysqli_fetch_array($consulta, MYSQLI_ASSOC)) {
                                    $pref=number_format(($fila['Precio']-($fila['Precio']*($fila['Descuento']/100))), 2, '.', '');
                                        echo "<tbody>
                                            <tr>
                                                <td>".$fila['NombreProd']."</td>
                                                <td> ".$pref."</td>
                                                <td> ".$codeProd['cantidad']."</td>
                                                <td> ".$pref*$codeProd['cantidad']."</td>
                                                <td>
                                                    <form action='process/quitarproducto.php' method='POST' class='FormCatElec' data-form=''>
                                                        <input type='hidden' value='".$codeProd['producto']."' name='codigo'>
                                                        <button class='btn btn-danger btn-raised btn-xs'>Eliminar</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>";
                                $suma += $pref*$codeProd['cantidad'];
                                $sumaA += $codeProd['cantidad'];
                                }
                                mysqli_free_result($consulta);
                            }
                            echo '<tr class="bg-danger"><td colspan="2">Total</td><td><strong>'.$sumaA.'</strong></td><td><strong>$'.number_format($suma,2).'</strong></td></tr></table><div class="ResForm"></div>';
                       
                        }else{
                            echo '<p class="text-center text-danger lead">El carrito de compras esta vacío</p><br>
                            <a href="product.php" class="btn btn-primary btn-lg btn-raised">Ir a Productos</a>';
                                                        
                        }  
                    ?>
</div>