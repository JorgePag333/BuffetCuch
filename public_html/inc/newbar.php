<?php 
    session_start(); 
    error_reporting(E_PARSE);
?>
 <nav id="navbar-auto-hidden">

    <div class="header-outs" id="home">
         
        <div class="header-bar">

            <div class="container-fluid hedder-up row">
              

                  <div class="col-lg-3 col-md-3 logo-head">
                     <h1><a class="navbar-brand" href="index.html">Buffet del C.U.Ch. Online</a></h1>
                  </div>

                  <div class="col-lg-5 search-right">
                     <form class="form-control2">
                        <input class="form-control3" type="search" placeholder="Buscar">
                        <button class="btn" type="submit">Buscar</button>
                     </form>
                  </div>

                  <div class="icons-carrito-log">
                   <a class="icons-carrito-log" href="carrito.php"><img src="./assets/icons/beetailer-icon.png">Carrito</img></a>
                   <a href="#" class="icons-carrito-log" data-toggle="modal" data-target=".modal-login">
                                  <i class="fa fa-user"></i>&nbsp;&nbsp;Login
                              </a>
                  </div>
            
            </div>
        </div>
    </div>

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
</nav> 





