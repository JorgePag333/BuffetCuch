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
            <br><br>
            <div class="panel panel-info">
                <div class="panel-heading text-center"><h4>Lista de  Aderesos</h4></div>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="">
                            <tr>
                            	<th class="text-center">#</th>
                                <th class="text-center">Código</th>
                                <th class="text-center">Nombre</th>
                                <th class="text-center">Categoria</th>
                                <th class="text-center">SubCategoria</th>
                                <th class="text-center">Precio</th>
                                <th class="text-center">Actualizar</th>
                              	<th class="text-center">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            	$mysqli = mysqli_connect(SERVER, USER, PASS, BD);
								mysqli_set_charset($mysqli, "utf8");

								$pagina = isset($_GET['pag']) ? (int)$_GET['pag'] : 1;
								$regpagina = 30;
								$inicio = ($pagina > 1) ? (($pagina * $regpagina) - $regpagina) : 0;

								$categorias=mysqli_query($mysqli,"SELECT SQL_CALC_FOUND_ROWS * FROM adereso LIMIT $inicio, $regpagina");

								$totalregistros = mysqli_query($mysqli,"SELECT FOUND_ROWS()");
								$totalregistros = mysqli_fetch_array($totalregistros, MYSQLI_ASSOC);

								$numeropaginas = ceil($totalregistros["FOUND_ROWS()"]/$regpagina);

								$cr=$inicio+1;
                              while($cate=mysqli_fetch_array($categorias, MYSQLI_ASSOC)){
                                
                            ?>
                            
                            <tr>
	                            <td class="text-center"><?php echo $cr; ?></td>
	                        	<td class="text-center"><?php echo $cate['indice']; ?></td>
	                        	<td class="text-center"><?php echo $cate['tipo']; ?></td>
                                <?php $gato=cateoriaIn($cate['CodigoCat']); ?>
	                        	<td class="text-center"><?php echo $gato?></td>
                                <?php $gato1=subcateoriaIn($cate['CodigoSubcat']); ?>
	                        	<td class="text-center"><?php echo $gato1?></td>
                                
                                <td class="text-center"><?php echo $cate['precioCat']; ?></td>
	                        	<td class="text-center">
	                        		<a href="configAdmin.php?view=aderesosinfo&code=<?php echo $cate['indice']; ?>" class="btn btn-raised btn-xs btn-success">Actualizar</a>
	                        	</td>
	                        	<td class="text-center">
	                        		<form action="process/delAdereso.php" method="POST" class="FormCatElec" data-form="delete">
	                        			<input type="hidden" name="categ-code" value="<?php echo $cate['indice']; ?>">
	                        			<button type="submit" class="btn btn-raised btn-xs btn-danger">Eliminar</button>	
	                        		</form>
	                        	</td>
                            </tr>
                            <?php
                            	$cr++;
                              }
                            ?>
                        </tbody>
                    </table>
                </div>
                <?php if($numeropaginas>=1): ?>
                <div class="text-center">
                  <ul class="pagination">
                    <?php if($pagina == 1): ?>
                        <li class="disabled">
                            <a>
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                    <?php else: ?>
                        <li>
                            <a href="configAdmin.php?view=aderesoslist&pag=<?php echo $pagina-1; ?>">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                    <?php endif; ?>


                    <?php
                        for($i=1; $i <= $numeropaginas; $i++ ){
                            if($pagina == $i){
                                echo '<li class="active"><a href="configAdmin.php?view=aderesoslist&pag='.$i.'">'.$i.'</a></li>';
                            }else{
                                echo '<li><a href="configAdmin.php?view=aderesoslist&pag='.$i.'">'.$i.'</a></li>';
                            }
                        }
                    ?>
                    

                    <?php if($pagina == $numeropaginas): ?>
                        <li class="disabled">
                            <a>
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    <?php else: ?>
                        <li>
                            <a href="configAdmin.php?view=aderesoslist&pag=<?php echo $pagina+1; ?>">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    <?php endif; ?>
                  </ul>
                </div>
                <?php endif; ?>
            </div>
        </div>
	</div>
</div>