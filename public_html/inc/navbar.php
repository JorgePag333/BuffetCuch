<?php 
    session_start(); 
    error_reporting(E_PARSE);
    require_once 'funcionMenu.php';
?>
<nav  id="navbar-auto-hidden">
        <div class="row hidden-xs">
            <div class="col-xs-2">
                <p class="text-navbar" ><img src="../assets/icons/cart.png">&nbsp;</img >&nbsp;&nbsp;&nbsp;Buffet del &nbsp;&nbsp;C.U.Ch. Online</p>
                <?php //smenuCategorias(); ?>
            </div>
            <div class="col-xs-10">
              <div class="contenedor-tabla pull-right">
                <div class="contenedor-tr">
                <div class="col-xs-10" >
                   <form action="./search.php" method="GET" style="height:60px; display: inline-block;visibility: visible; width: 90%">
                                    <div class="" style="height:60px">
                                        <div style="margin: 10px 0px ;width:100%; max-height: 6px; border-radius: 18px;     outline: 5px solid #4070F4; outline-offset: -5px; background-color:white;"
                                            class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-search x3"
                                                    style="font-size: 34px; border-radius: 100px;"
                                                    aria-hidden= "true"></i></span>
                                            <input style=" font-size:  20px; ;  border:none; margin: 10px 0px ;width:100%;"type="text" id="addon1" class="" name="term" required=""
                                                title="Escriba nombre o marca del producto"
                                                placeholder="Que te gustaria encontrar... ">
                                            <span class="input-group-btn">
                                                <button class="btn btn "
                                                    style="right: -14px; width:100% ;height: 42px;border-radius: 30px;padding: 9px;margin: 0px;"
                                                    type="submit">Buscar</button>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                </div>
                <!-- <a href="carrito1.php" class="dropdown table-cell-td">Carrito</a> -->
                
                <div class="carrytoR" >
                
                    <div class="carrytoA" >
                    
                  
                        
                    </div>
                </div> 
                  <?php
                      if(!$_SESSION['nombreAdmin']==""){
                          echo ' 
                              <a href="configAdmin.php" class="table-cell-td">Administración</a>
                              <a href="#!" class="table-cell-td exit-system">
                                  <i class="fa fa-user"></i>&nbsp;&nbsp;'.$_SESSION['nombreAdmin'].'
                              </a>
                          ';
                      }else if(!$_SESSION['nombreUser']==""){
                          echo ' 

                              <a href="pedido.php" class="table-cell-td">Mis Pedidos</a>
                              <a href="carrito.php" class="table-cell-td">Carrito</a>
                              <a href="#!" class="table-cell-td exit-system">
                              <i class="fa fa-user"></i>&nbsp;&nbsp;'.$_SESSION['nombreUser'].'
                              </a>
                              <a href="#!" class="table-cell-td userConBtn" data-code="'.$_SESSION['UserNIT'].'">
                                <i class="glyphicon glyphicon-cog"></i>
                              </a>
                          ';
                      }else{
                          echo '
                          <div class="dropdown" >
                          <a style="color:white; " class="table-cell-td dropdown-toggle" type="button" id="drpdowncategory" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Carrito &nbsp;
                            <span></span>
                          </a>
                          <ul class="dropdown-menu " aria-labelledby="drpdowncategory">
                    
                                <li>
                               
                                </li>
                            
                          </ul>
                        </div>
                          <div class="dropdown" style="margin-right:83px; text-align:center">
                          <a style="color:white;" class="table-cell-td dropdown-toggle" type="button" id="drpdowncategory" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Mi Cuenta &nbsp;
                            <span></span>
                          </a>
                          <ul class="dropdown-menu " aria-labelledby="drpdowncategory">
                                <li><a href="#" class="table-cell-td" data-toggle="modal" data-target=".modal-login">
                                <i class="fa fa-user"></i>&nbsp;&nbsp;Iniciar Session
                            </a></li>
                            <li><a href="registration.php"><i class="fa fa-user"></i>&nbsp;&nbsp;Registrarse</a></li>
                          </ul>
                        </div>
                  
            


                          ';
                      }
                  ?>
                </div>
              </div>
            </div>
        </div>
        <div class="row hidden-xs" style="height: 30px;">
           <div class="col-xs-10">
              <div class="row">
                <div class="contenedor-tr col-xs-8">
               
                <div class="col-xs-8" >
                <div class="dropdown col-xs-8">
                <!-- <a class="dropdown-toggle" style="margin: 10px;;" type="button" id="drpdowncategory" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Categorias &nbsp;
                            <span class="caret"></span>
                          </a>
                          <ul class="dropdown-menu " aria-labelledby="drpdowncategory">
                                <li><iframe src="carrito3.php" width="300" height="150" >
                            </iframe></li>
                          </ul> -->
                          <a class="dropdown-toggle" style="margin: 10px;color:white;" type="button" id="drpdowncategory" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Categorias &nbsp;
                            <span class="caret"></span>
                          </a>
                          <ul class="dropdown-menu " aria-labelledby="drpdowncategory">
                          
                    
                        <?php 
                          menuCategorias();
                        ?>
                        
                        </ul>
                        <a href="index.php" style="padding: 0;color:white; ">Inicio</a>  
                <a href="product.php" style="padding: 10px 10px;color:white;">Productos</a>
                </div>
                <?php //endif; ?>
                             
                </div>
                
                </div>
              </div>
            </div>
        </div>
        <?php
              // include './library/configServer.php';
              // include './library/consulSQL.php';
              // $checkAllCat=ejecutarSQL::consultar("SELECT * FROM categoria");
              // if(mysqli_num_rows($checkAllCat)>=1):
            ?>

        




        <div class="row visible-xs"><!-- Mobile menu navbar -->
            <div class="col-xs-12">
                <button class="btn btn-default pull-left button-mobile-menu" id="btn-mobile-menu">
                    <i class="fa fa-th-list"></i>&nbsp;&nbsp;Menú
                </button>
               
                <?php
                if(!$_SESSION['nombreAdmin']==""){echo '
                    <a href="#"  id="button-login-xs" class="elements-nav-xs exit-system">
                        <i class="fa fa-user"></i>&nbsp; '.$_SESSION['nombreAdmin'].' 
                    </a>';
                }else if(!$_SESSION['nombreUser']==""){
                    echo '
                    <a href="#"  id="button-login-xs" class="elements-nav-xs exit-system">
                        <i class="fa fa-user"></i>&nbsp; '.$_SESSION['nombreUser'].' 
                    </a>';
                }else{
                    echo '
                       <a href="#" data-toggle="modal" data-target=".modal-login" id="button-login-xs" class="elements-nav-xs">
                        <i class="fa fa-user"></i>&nbsp; Iniciar Sesión
                        </a> 
                   ';
                }
                ?>
            </div>
        </div>
</nav>
   
    <div class="modal fade modal-login" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
          <div class="modal-content" id="modal-form-login" style="padding: 15px;">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <p class="text-center text-primary">
                <i class="fa fa-user-circle-o fa-3x" aria-hidden="true"></i>
              </p>
              <h4 class="modal-title text-center text-primary" id="myModalLabel">Iniciar sesión</h4>
            </div>
            <form action="process/login.php" method="post" role="form" class="FormCatElec" data-form="login">
                <div class="form-group label-floating">
                    <label class="control-label"><span class="glyphicon glyphicon-user"></span>&nbsp;Nombre</label>
                    <input type="text" class="form-control" name="nombre-login" required="">
                </div>
                <div class="form-group label-floating">
                    <label class="control-label"><span class="glyphicon glyphicon-lock"></span>&nbsp;Contraseña</label>
                    <input type="password" class="form-control" name="clave-login" required="">
                </div>

                <p>¿Cómo iniciaras sesión?</p>
               
                <div class="radio">
                  <label>
                      <input type="radio" name="optionsRadios" value="option1" checked="">
                      Usuario
                  </label>
               </div>

               <div class="radio">
                  <label>
                      <input type="radio" name="optionsRadios" value="option2">
                       Administrador
                  </label>
               </div>
               
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary btn-raised btn-sm">Iniciar sesión</button>
                  <button type="button" class="btn btn-danger btn-raised btn-sm" data-dismiss="modal">Cancelar</button>
                </div>
                <div class="ResFormL" style="width: 100%; text-align: center; margin: 0;"></div>
            </form>
          </div>
      </div>
    </div>
    <!-- Fin Modal login -->
    
    <div id="mobile-menu-list" class="hidden-sm hidden-md hidden-lg">
        <br>
        <h3 class="text-center tittles-pages-logo">El Buffet del C.U.Ch. Online</h3>
        <button class="btn btn-default button-mobile-menu" id="button-close-mobile-menu">
        <i class="fa fa-times"></i>
        </button>
        <br><br>
        <ul class="list-unstyled text-center">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="product.php">Productos</a></li>
            <li><a href="carrito.php">Carrito</a></li>
            <?php 
                if(!$_SESSION['nombreAdmin']==""){
                    echo '<li><a href="configAdmin.php">Administración</a></li>';
                }elseif(!$_SESSION['nombreUser']==""){
                    echo '
                    <li><a href="pedido.php">Pedido</a></li>
                    <li><a href="#" class="glyphicon glyphicon-cog userConBtn" data-code="'.$_SESSION['UserNIT'].'"> Configuraciones</a></li>
                    ';
                }else{
                    echo '<li><a href="registration.php">Registro</a></li>';
                }
            ?>
        </ul>
    </div>
    <?php if(isset($_SESSION['nombreUser'])): ?>
    <div class="modal fade" id="ModalUpUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <form class="modal-content FormCatElec" action="process/updateClient.php" method="POST" data-form="save" autocomplete="off">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Configuraciones</h4>
          </div>
          <div class="modal-body" id="UserConData">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-info">Guardar cambios</button>
          </div>
        </form>
      </div>
    </div>
    <?php  endif;?>

