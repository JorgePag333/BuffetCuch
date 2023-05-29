<ul class="breadcrumb" style="margin-bottom: 5px;">
    <li>
        <a href="configAdmin.php?view=adicionales">
            <i class="fa fa-plus-circle" aria-hidden="true"></i> &nbsp; Nuevo Producto Adicional
        </a>
    </li>
    <li>
        <a href="configAdmin.php?view=adicionaleslist"><i class="fa fa-list-ol" aria-hidden="true"></i> &nbsp; Lista de productos adicionales</a>
    </li>
    <li>
        <a href="configAdmin.php?view=aderesos">
            <i class="fa fa-plus-circle" aria-hidden="true"></i> &nbsp; Nuevo Adereso
        </a>
    </li>
    <li>
        <a href="configAdmin.php?view=aderesoslist"><i class="fa fa-list-ol" aria-hidden="true"></i> &nbsp; Lista de aderesos</a>
    </li>
</ul>
<div class="">
	<div class="row">
        <div class="col-xs-12">
            <div class="container-form-admin">
                <h3 class="text-info text-center">Actualizar datos de productos adicionales</h3>
                <?php
                	$code=$_GET['code'];
                	$categoria=ejecutarSQL::consultar("SELECT * FROM adicionales WHERE indi='$code'");
                	$cate=mysqli_fetch_array($categoria, MYSQLI_ASSOC);
                ?>
                <form action="./process/updateAdicionales.php" method="POST" class="FormCatElec" data-form="update">
                	<input type="hidden" name="categ-code-old" value="<?php echo $cate['indi']; ?>">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="form-group label-floating">
                                    <label class="control-label">Código</label>
                                    <input class="form-control" type="text" value="<?php echo $cate['indi']; ?>" name="categ-code" maxlength="9" readonly>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="form-group label-floating">
                                    <label class="control-label">Nombre</label>
                                    <input class="form-control" value="<?php echo $cate['nombre']; ?>" type="text" name="categ-name" maxlength="30" required="">
                                </div>  
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="form-group label-floating">
                                    <label class="control-label">Categoria</label>
                                    <input class="form-control" value="<?php echo $cate['CodigoCat']; ?>" type="text" name="categ-cat" required="">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="form-group label-floating">
                                    <label class="control-label">Subcategoria</label>
                                    <input class="form-control" value="<?php echo $cate['CodigoSubcat']; ?>" type="text" name="categ-subcat" required="">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="form-group label-floating">
                                    <label class="control-label">Precio Adicional</label>
                                    <input class="form-control" value="<?php echo $cate['precioAd']; ?>" type="text" name="categ-precioad" required="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="text-center"><button type="submit" class="btn btn-primary btn-raised">Actualizar adicionales</button></p>
                </form>
            </div>
        </div>
    </div>
</div>