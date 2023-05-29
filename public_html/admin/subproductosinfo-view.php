
<ul class="breadcrumb" style="margin-bottom: 5px;">
    <li>
        <a href="configAdmin.php?view=subproductos">
            <i class="fa fa-plus-circle" aria-hidden="true"></i> &nbsp; Nuevo subproducto
        </a>
    </li>
    <li>
        <a href="configAdmin.php?view=subproductoslist"><i class="fa fa-list-ol" aria-hidden="true"></i> &nbsp; Subproductos en tienda</a>
    </li>
</ul>
<div class="">
	<div class="row">
        <div class="col-xs-12">
            <div class="container-form-admin">
                <h3 class="text-primary text-center">Actualizar datos del producto</h3>
                <?php
                	$code=$_GET['code'];
                	$producto=ejecutarSQL::consultar("SELECT * FROM producto WHERE CodigoProd='$code'");
                	$prod=mysqli_fetch_array($producto, MYSQLI_ASSOC);
                ?>
                <form action="./process/updateSubProduct.php" method="POST" enctype="multipart/form-data" class="FormCatElec" data-form="update">
                	<input type="hidden" name="code-old-prod" value="<?php echo $prod['CodigoProd']; ?>">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12">
                                <legend>Datos básicos</legend>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                              <div class="form-group label-floating">
                                <label class="control-label">Código de producto</label>
                                <input type="text" class="form-control" value="<?php echo $prod['CodigoProd']; ?>" required maxlength="30" readonly name="prod-codigo">
                              </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                              <div class="form-group label-floating">
                                <label class="control-label">Nombre de producto</label>
                                <input type="text" class="form-control" value="<?php echo $prod['NombreProd']; ?>" required maxlength="30" name="prod-name">
                              </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                              <div class="form-group label-floating">
                                <label class="control-label">Marca</label>
                                <input type="text" class="form-control" value="<?php echo $prod['Marca']; ?>" required name="prod-marca">
                              </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                              <div class="form-group label-floating">
                                <label class="control-label">Modelo</label>
                                <input type="text" class="form-control" value="<?php echo $prod['Modelo']; ?>" required name="prod-model">
                              </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                              <div class="form-group label-floating">
                                <label class="control-label">Precio</label>
                                <input type="text" class="form-control" value="<?php echo $prod['Precio']; ?>" required maxlength="20" pattern="[0-9.]{1,20}" name="prod-price">
                              </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                              <div class="form-group label-floating">
                                <label class="control-label">Descuento (%)</label>
                                <input type="text" class="form-control" required maxlength="2" pattern="[0-9]{1,2}" name="prod-desc-price" value="<?php echo $prod['Descuento']; ?>">
                              </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                              <div class="form-group label-floating">
                                <label class="control-label">Unidades disponibles</label>
                                <input type="text" class="form-control" value="<?php echo $prod['Stock']; ?>" required maxlength="20" pattern="[0-9]{1,20}" name="prod-stock">
                              </div>
                            </div>
                            <div class="col-xs-12">
                                <legend>Perteneciente a Producto</legend>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                              <div class="form-group">
                                <label>Producto Padre</label>
                                <select class="form-control" name="prod-codigoP">
                                    <?php
                                        $categoriac= ejecutarSQL::consultar("SELECT * FROM producto");
                                        while($catec=mysqli_fetch_array($categoriac, MYSQLI_ASSOC)){
                                            echo '<option value="'.$catec['CodigoProd'].'">'.$catec['NombreProd'].'</option>';
                                        }
                                    ?>
                                </select>
                              </div>
                            </div>     
                        </div>
                        <input type="hidden"  name="admin-name" value="<?php echo $_SESSION['nombreAdmin'] ?>">
                       <p class="text-center"><button type="submit" class="btn btn-success btn-raised">Actualizar producto</button></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>