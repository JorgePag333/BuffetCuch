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
                <h3 class="text-info text-center">Agregar aderesos</h3>
                <form action="process/regAderesos.php" method="POST" class="FormCatElec" data-form="save">
                    <div class="container-fluid">
                        <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="form-group label-floating">
                                    <label class="control-label">Código</label>
                                    <input class="form-control" type="text" name="categ-code" maxlength="9" readonly>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="form-group label-floating">
                                    <label class="control-label">Nombre</label>
                                    <input class="form-control" value="" type="text" name="categ-name" maxlength="30" required="">
                                </div>  
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="form-group label-floating">
                                <label>Categoría</label>
                                <select class="form-control" name="categ-cat">
                                    <?php
                                        $categoriac= ejecutarSQL::consultar("SELECT * FROM categoria");
                                        while($catec=mysqli_fetch_array($categoriac, MYSQLI_ASSOC)){
                                            echo '<option value="'.$catec['CodigoCat'].'">'.$catec['Nombre'].'</option>';
                                        }
                                    ?>
                                </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                            <label>Categoría</label>
                                <select class="form-control" name="categ-subcat">
                                    <?php
                                        $categoriac= ejecutarSQL::consultar("SELECT * FROM subcategorias");
                                        while($catec=mysqli_fetch_array($categoriac, MYSQLI_ASSOC)){
                                            echo '<option value="'.$catec['NumCat'].'">'.$catec['NombreCat'].'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="form-group label-floating">
                                    <label class="control-label">Precio</label>
                                    <input class="form-control" value="" type="text" name="categ-precioad" required="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="text-center"><button type="submit" class="btn btn-primary btn-raised">Agregar adicional</button></p>
                </form>
            </div>
        </div>
    </div>
</div>