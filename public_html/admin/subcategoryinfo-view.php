<p class="lead">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, culpa quasi tempore assumenda, perferendis sunt. Quo consequatur saepe commodi maxime, sit atque veniam blanditiis molestias obcaecati rerum, consectetur odit accusamus.
</p>
<ul class="breadcrumb" style="margin-bottom: 5px;">
    <li>
        <a href="configAdmin.php?view=subcategory">
            <i class="fa fa-plus-circle" aria-hidden="true"></i> &nbsp; Nueva SubCategoría
        </a>
    </li>
    <li>
        <a href="configAdmin.php?view=subcategorylist"><i class="fa fa-list-ol" aria-hidden="true"></i> &nbsp; SubCategoría de productos</a>
    </li>
</ul>
<div class="">
	<div class="row">
        <div class="col-xs-12">
            <div class="container-form-admin">
                <h3 class="text-info text-center">Actualizar datos de categoría</h3>
                <?php
                	$code=$_GET['code'];
                	$categoria=ejecutarSQL::consultar("SELECT * FROM subcategorias WHERE NumCat='$code'");
                	$cate=mysqli_fetch_array($categoria, MYSQLI_ASSOC);
                    $numCat=$cate['CodigoCat'];

                    $nomCat=ejecutarSQL::consultar("SELECT * FROM categoria WHERE CodigoCat='$numCat'");
                    $nombre=mysqli_fetch_array($nomCat, MYSQLI_ASSOC);
                ?>
                <form action="./process/updatesubCategory.php" method="POST" class="FormCatElec" data-form="update">
                	<input type="hidden" name="categ-code-old" value="<?php echo $cate['NumCat']; ?>">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="form-group label-floating">
                                    <label class="control-label">Código</label>
                                    <input class="form-control" type="text" value="<?php echo $cate['NumCat']; ?>" name="categ-code" maxlength="9" readonly>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="form-group label-floating">
                                    <label class="control-label">NombreSubCategoria</label>
                                    <input class="form-control" value="<?php echo $cate['NombreCat']; ?>" type="text" name="categ-name" maxlength="30" required="">
                                </div>  
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="form-group label-floating">
                                    <label class="control-label">Categoria</label>
                                    <input class="form-control" value="<?php echo $nombre['Nombre']; ?>" type="text" name="categ-descrip" required="">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="text-center"><button type="submit" class="btn btn-primary btn-raised">Actualizar categoría</button></p>
                </form>
            </div>
        </div>
    </div>
</div>