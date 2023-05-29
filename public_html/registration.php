<?php
include './library/configServer.php';
include './library/consulSQL.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Registro</title>
    <?php include './inc/link.php'; ?>
</head>
<body id="container-page-registration">
    <?php include './inc/navbar.php'; 
    $numPost=$_GET['id'];
    ?>
    
    <section id="form-registration">
        <div class="container">
            <div class="page-header">
              <h1>REGISTRO <small class="tittles-pages-logo">Buffete Del Cuch Online</small></h1>
            </div>
            <?php
              $checkAllCat=ejecutarSQL::consultar("SELECT * FROM tipoclientes");
              if(mysqli_num_rows($checkAllCat)>=1):
            ?>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-xs-12 col-md-4">
                    <div class="dropdown">
                      <button class="btn btn-primary btn-raised dropdown-toggle" type="button" id="drpdowncategory" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Seleccione una categoría &nbsp;
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="drpdowncategory">
                        <?php 
                          
                          while($cate=mysqli_fetch_array($checkAllCat, MYSQLI_ASSOC)){
                              echo '
                              <!--<form action="index.php?id=1" method="GET">-->
                                <li><a type="checkbox" href="registration.php?id='.$cate['indice'].'">'.$cate['tipo'].'</a></li>
                                <li role="separator" class="divider"></li>
                              ';
                          }
                          //echo '<input type="submit" value="Enviar Informacion"/></form>';
                        ?>
                      </ul>
                    </div>
                  </div>
                  <?php endif; ?>
                  <?php 
                  echo $numPost;
                  if($numPost==1){
                    echo '
                    <div class="row">
                  
                    <div class="col-sm-12">
                        <div id="container-form">
                           <p class="text-center lead">Registro de Clientes</p>
                           <br><br>
                           <form class="FormCatElec" action="process/regclien.php" role="form" method="POST" data-form="save">
                              <div class="container-fluid">
                                <div class="row">
                                  <div class="col-xs-12">
                                    <legend><i class="fa fa-user"></i> &nbsp; Datos personales</legend>
                                  </div>
                                  <div class="col-xs-6">
                                    <div class="form-group label-floating">
                                      <label class="control-label"><i class="fa fa-address-card-o" aria-hidden="true"></i>&nbsp; Ingrese su número de DNI</label>
                                      <input class="form-control" type="text" required name="clien-nit" pattern="[0-9]{1,15}" title="Ingrese su número de DNI. Solamente números" maxlength="15" >
                                    </div>
                                  </div>
                                  <div class="col-xs-6">
                                    <div class="form-group label-floating">
                                      <label class="control-label"><i class="fa fa-address-card-o" aria-hidden="true"></i>&nbsp; Curso</label>
                                      <input class="form-control" type="text" required name="clien-nit" pattern="[a-zA-Z ]{1,50}" title="Ingrese el nombre de su curso " maxlength="15" >
                                    </div>
                                  </div>
                                  <div class="col-xs-6">
                                    <div class="form-group label-floating">
                                      <label class="control-label"><i class="fa fa-user"></i>&nbsp; Ingrese sus nombres</label>
                                      <input class="form-control" type="text" required name="clien-fullname" title="Ingrese sus nombres (solamente letras)" pattern="[a-zA-Z ]{1,50}" maxlength="50">
                                    </div>
                                  </div>
                                  <div class="col-xs-6">
                                    <div class="form-group label-floating">
                                      <label class="control-label"><i class="fa fa-cart"></i>&nbsp; Ingrese año Cursada</label>
                                      <input class="form-control" type="text" required name="clien-lastname" title="Ingrese el año de Cursada" pattern="{1,50}" maxlength="50">
                                    </div>
                                  </div>
                                  <div class="col-xs-6">
                                    <div class="form-group label-floating">
                                      <label class="control-label"><i class="fa fa-user"></i>&nbsp; Ingrese sus apellidos</label>
                                      <input class="form-control" type="text" required name="clien-lastname" title="Ingrese sus apellido (solamente letras)" pattern="[a-zA-Z ]{1,50}" maxlength="50">
                                    </div>
                                  </div>
                                  <div class="col-xs-6">
                                    <div class="form-group label-floating">
                                      <label class="control-label"><i class="fa fa-mobile"></i>&nbsp; Ingrese su número telefónico</label>
                                        <input class="form-control" type="tel" required name="clien-phone" maxlength="15" title="Ingrese su número telefónico. Mínimo 8 digitos máximo 15">
                                    </div>
                                  </div>
                                  <div class="col-xs-6">
                                    <div class="form-group label-floating">
                                      <label class="control-label"><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp; Ingrese su Email</label>
                                        <input class="form-control" type="email" required name="clien-email" title="Ingrese la dirección de su Email" maxlength="50">
                                    </div>
                                  </div>
                                  <div class="col-xs-6">
                                    <div class="form-group label-floating">
                                      <label class="control-label"><i class="fa fa-home"></i>&nbsp; Ingrese su dirección</label>
                                      <input class="form-control" type="text" required name="clien-dir" title="Ingrese la direción en la reside actualmente" maxlength="100">
                                    </div>
                                  </div>
                                  <div class="col-xs-12">
                                    <legend><i class="fa fa-lock"></i> &nbsp; Datos de la cuenta</legend>
                                  </div>
                                  <div class="col-xs-12">
                                    <div class="form-group label-floating">
                                      <label class="control-label"><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp; Ingrese su nombre de usuario</label>
                                        <input class="form-control" type="text" required name="clien-name" title="Ingrese su nombre. Máximo 9 caracteres (solamente letras y numeros sin espacios)" pattern="[a-zA-Z0-9]{1,9}" maxlength="9">
                                    </div>
                                  </div>
                                  <div class="col-xs-12 col-sm-6">
                                    <div class="form-group label-floating">
                                      <label class="control-label"><i class="fa fa-lock"></i>&nbsp; Introduzca una contraseña</label>
                                      <input class="form-control" type="password" required name="clien-pass" title="Defina una contraseña para iniciar sesión">
                                    </div>
                                  </div>
                                  <div class="col-xs-12 col-sm-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label"><i class="fa fa-lock"></i>&nbsp; Repita la contraseña</label>
                                        <input class="form-control" type="password" required name="clien-pass2" title="Repita la contraseña">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <p><button type="submit" class="btn btn-primary btn-block btn-raised">Registrarse</button></p>
                            </form> 
                        </div> 
                    </div>
                </div>';
                  } elseif($numPost==2){
                    echo '
                    <div class="row">
                  
                    <div class="col-sm-12">
                        <div id="container-form">
                           <p class="text-center lead">Registro de Clientes</p>
                           <br><br>
                           <form class="FormCatElec" action="process/regclien.php" role="form" method="POST" data-form="save">
                              <div class="container-fluid">
                                <div class="row">
                                  <div class="col-xs-12">
                                    <legend><i class="fa fa-user"></i> &nbsp; Datos personales</legend>
                                  </div>
                                  <div class="col-xs-6">
                                    <div class="form-group label-floating">
                                      <label class="control-label"><i class="fa fa-address-card-o" aria-hidden="true"></i>&nbsp; Ingrese su número de DNI</label>
                                      <input class="form-control" type="text" required name="clien-nit" pattern="[0-9]{1,15}" title="Ingrese su número de DNI. Solamente números" maxlength="15" >
                                    </div>
                                  </div>
                                  <div class="col-xs-6">
                                    <div class="form-group label-floating">
                                      <label class="control-label"><i class="fa fa-address-card-o" aria-hidden="true"></i>&nbsp; Curso</label>
                                      <input class="form-control" type="text" required name="clien-nit" pattern="[a-zA-Z ]{1,50}" title="Ingrese el nombre de su curso " maxlength="15" >
                                    </div>
                                  </div>
                                  <div class="col-xs-6">
                                    <div class="form-group label-floating">
                                      <label class="control-label"><i class="fa fa-user"></i>&nbsp; Ingrese sus nombres</label>
                                      <input class="form-control" type="text" required name="clien-fullname" title="Ingrese sus nombres (solamente letras)" pattern="[a-zA-Z ]{1,50}" maxlength="50">
                                    </div>
                                  </div>
                                  <div class="col-xs-6">
                                    <div class="form-group label-floating">
                                      <label class="control-label"><i class="fa fa-user"></i>&nbsp; Ingrese sus apellidos</label>
                                      <input class="form-control" type="text" required name="clien-lastname" title="Ingrese sus apellido (solamente letras)" pattern="[a-zA-Z ]{1,50}" maxlength="50">
                                    </div>
                                  </div>
                                  <div class="col-xs-6">
                                    <div class="form-group label-floating">
                                      <label class="control-label"><i class="fa fa-mobile"></i>&nbsp; Ingrese su número telefónico</label>
                                        <input class="form-control" type="tel" required name="clien-phone" maxlength="15" title="Ingrese su número telefónico. Mínimo 8 digitos máximo 15">
                                    </div>
                                  </div>
                                  <div class="col-xs-6">
                                    <div class="form-group label-floating">
                                      <label class="control-label"><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp; Ingrese su Email</label>
                                        <input class="form-control" type="email" required name="clien-email" title="Ingrese la dirección de su Email" maxlength="50">
                                    </div>
                                  </div>
                                  <div class="col-xs-6">
                                    <div class="form-group label-floating">
                                      <label class="control-label"><i class="fa fa-home"></i>&nbsp; Ingrese su dirección</label>
                                      <input class="form-control" type="text" required name="clien-dir" title="Ingrese la direción en la reside actualmente" maxlength="100">
                                    </div>
                                  </div>
                                  <div class="col-xs-12">
                                    <legend><i class="fa fa-lock"></i> &nbsp; Datos de la cuenta</legend>
                                  </div>
                                  <div class="col-xs-12">
                                    <div class="form-group label-floating">
                                      <label class="control-label"><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp; Ingrese su nombre de usuario</label>
                                        <input class="form-control" type="text" required name="clien-name" title="Ingrese su nombre. Máximo 9 caracteres (solamente letras y numeros sin espacios)" pattern="[a-zA-Z0-9]{1,9}" maxlength="9">
                                    </div>
                                  </div>
                                  <div class="col-xs-12 col-sm-6">
                                    <div class="form-group label-floating">
                                      <label class="control-label"><i class="fa fa-lock"></i>&nbsp; Introduzca una contraseña</label>
                                      <input class="form-control" type="password" required name="clien-pass" title="Defina una contraseña para iniciar sesión">
                                    </div>
                                  </div>
                                  <div class="col-xs-12 col-sm-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label"><i class="fa fa-lock"></i>&nbsp; Repita la contraseña</label>
                                        <input class="form-control" type="password" required name="clien-pass2" title="Repita la contraseña">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <p><button type="submit" class="btn btn-primary btn-block btn-raised">Registrarse</button></p>
                            </form> 
                        </div> 
                    </div>
                </div>';


                  }elseif($numPost==3){
                    echo '
                    <div class="row">
                  
                    <div class="col-sm-12">
                        <div id="container-form">
                           <p class="text-center lead">Registro de Clientes</p>
                           <br><br>
                           <form class="FormCatElec" action="process/regclien.php" role="form" method="POST" data-form="save">
                              <div class="container-fluid">
                                <div class="row">
                                  <div class="col-xs-12">
                                    <legend><i class="fa fa-user"></i> &nbsp; Datos personales</legend>
                                  </div>
                                  <div class="col-xs-6">
                                    <div class="form-group label-floating">
                                      <label class="control-label"><i class="fa fa-address-card-o" aria-hidden="true"></i>&nbsp; Ingrese su número de DNI</label>
                                      <input class="form-control" type="text" required name="clien-nit" pattern="[0-9]{1,15}" title="Ingrese su número de DNI. Solamente números" maxlength="15" >
                                    </div>
                                  </div>
                                  <div class="col-xs-6">
                                    <div class="form-group label-floating">
                                      <label class="control-label"><i class="fa fa-address-card-o" aria-hidden="true"></i>&nbsp; Puesto</label>
                                      <input class="form-control" type="text" required name="clien-nit" pattern="[a-zA-Z ]{1,50}" title="Ingrese el nombre de su Puesto Como directivo " maxlength="15" >
                                    </div>
                                  </div>
                                  <div class="col-xs-6">
                                    <div class="form-group label-floating">
                                      <label class="control-label"><i class="fa fa-user"></i>&nbsp; Ingrese sus nombres</label>
                                      <input class="form-control" type="text" required name="clien-fullname" title="Ingrese sus nombres (solamente letras)" pattern="[a-zA-Z ]{1,50}" maxlength="50">
                                    </div>
                                  </div>
                          
                                  <div class="col-xs-6">
                                    <div class="form-group label-floating">
                                      <label class="control-label"><i class="fa fa-user"></i>&nbsp; Ingrese sus apellidos</label>
                                      <input class="form-control" type="text" required name="clien-lastname" title="Ingrese sus apellido (solamente letras)" pattern="[a-zA-Z ]{1,50}" maxlength="50">
                                    </div>
                                  </div>
                                  <div class="col-xs-6">
                                    <div class="form-group label-floating">
                                      <label class="control-label"><i class="fa fa-mobile"></i>&nbsp; Ingrese su número telefónico</label>
                                        <input class="form-control" type="tel" required name="clien-phone" maxlength="15" title="Ingrese su número telefónico. Mínimo 8 digitos máximo 15">
                                    </div>
                                  </div>
                                  <div class="col-xs-6">
                                    <div class="form-group label-floating">
                                      <label class="control-label"><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp; Ingrese su Email</label>
                                        <input class="form-control" type="email" required name="clien-email" title="Ingrese la dirección de su Email" maxlength="50">
                                    </div>
                                  </div>
                                  <div class="col-xs-6">
                                    <div class="form-group label-floating">
                                      <label class="control-label"><i class="fa fa-home"></i>&nbsp; Ingrese su dirección</label>
                                      <input class="form-control" type="text" required name="clien-dir" title="Ingrese la direción en la reside actualmente" maxlength="100">
                                    </div>
                                  </div>
                                  <div class="col-xs-12">
                                    <legend><i class="fa fa-lock"></i> &nbsp; Datos de la cuenta</legend>
                                  </div>
                                  <div class="col-xs-12">
                                    <div class="form-group label-floating">
                                      <label class="control-label"><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp; Ingrese su nombre de usuario</label>
                                        <input class="form-control" type="text" required name="clien-name" title="Ingrese su nombre. Máximo 9 caracteres (solamente letras y numeros sin espacios)" pattern="[a-zA-Z0-9]{1,9}" maxlength="9">
                                    </div>
                                  </div>
                                  <div class="col-xs-12 col-sm-6">
                                    <div class="form-group label-floating">
                                      <label class="control-label"><i class="fa fa-lock"></i>&nbsp; Introduzca una contraseña</label>
                                      <input class="form-control" type="password" required name="clien-pass" title="Defina una contraseña para iniciar sesión">
                                    </div>
                                  </div>
                                  <div class="col-xs-12 col-sm-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label"><i class="fa fa-lock"></i>&nbsp; Repita la contraseña</label>
                                        <input class="form-control" type="password" required name="clien-pass2" title="Repita la contraseña">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <p><button type="submit" class="btn btn-primary btn-block btn-raised">Registrarse</button></p>
                            </form> 
                        </div> 
                    </div>
                </div>';
                  }else{
                    echo '
                    <div class="col-sm-7">
                    <div id="container-form">
                       <p class="text-center lead">Registro de Clientes</p>
                       <br><br>
                       <form class="FormCatElec" action="./process/regclien.php" role="form" method="POST" data-form="save">
                          <div class="container-fluid">
                            <div class="row">
                              <div class="col-xs-12">
                                <legend><i class="fa fa-user"></i> &nbsp; Datos personales</legend>
                              </div>
                              <div class="col-xs-12">
                                <div class="form-group label-floating">
                                  <label class="control-label"><i class="fa fa-address-card-o" aria-hidden="true"></i>&nbsp; Ingrese su número de DNI</label>
                                  <input class="form-control" type="text" required name="clien-nit" pattern="[0-9]{1,15}" title="Ingrese su número de DNI. Solamente números" maxlength="15" >
                                </div>
                              </div>
                              <div class="col-xs-12 col-sm-6">
                                <div class="form-group label-floating">
                                  <label class="control-label"><i class="fa fa-user"></i>&nbsp; Ingrese sus nombres</label>
                                  <input class="form-control" type="text" required name="clien-fullname" title="Ingrese sus nombres (solamente letras)" pattern="[a-zA-Z ]{1,50}" maxlength="50">
                                </div>
                              </div>
                              <div class="col-xs-12 col-sm-6">
                                <div class="form-group label-floating">
                                  <label class="control-label"><i class="fa fa-user"></i>&nbsp; Ingrese sus apellidos</label>
                                  <input class="form-control" type="text" required name="clien-lastname" title="Ingrese sus apellido (solamente letras)" pattern="[a-zA-Z ]{1,50}" maxlength="50">
                                </div>
                              </div>
                              <div class="col-xs-12 col-sm-6">
                                <div class="form-group label-floating">
                                  <label class="control-label"><i class="fa fa-mobile"></i>&nbsp; Ingrese su número telefónico</label>
                                    <input class="form-control" type="tel" required name="clien-phone" maxlength="15" title="Ingrese su número telefónico. Mínimo 8 digitos máximo 15">
                                </div>
                              </div>
                              <div class="col-xs-12 col-sm-6">
                                <div class="form-group label-floating">
                                  <label class="control-label"><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp; Ingrese su Email</label>
                                    <input class="form-control" type="email" required name="clien-email" title="Ingrese la dirección de su Email" maxlength="50">
                                </div>
                              </div>
                              <div class="col-xs-12">
                                <div class="form-group label-floating">
                                  <label class="control-label"><i class="fa fa-home"></i>&nbsp; Ingrese su dirección</label>
                                  <input class="form-control" type="text" required name="clien-dir" title="Ingrese la direción en la reside actualmente" maxlength="100">
                                </div>
                              </div>
                              <div class="col-xs-12">
                                <legend><i class="fa fa-lock"></i> &nbsp; Datos de la cuenta</legend>
                              </div>
                              <div class="col-xs-12">
                                <div class="form-group label-floating">
                                  <label class="control-label"><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp; Ingrese su nombre de usuario</label>
                                    <input class="form-control" type="text" required name="clien-name" title="Ingrese su nombre. Máximo 9 caracteres (solamente letras y numeros sin espacios)" pattern="[a-zA-Z0-9]{1,9}" maxlength="9">
                                </div>
                              </div>
                              <div class="col-xs-12 col-sm-6">
                                <div class="form-group label-floating">
                                  <label class="control-label"><i class="fa fa-lock"></i>&nbsp; Introduzca una contraseña</label>
                                  <input class="form-control" type="password" required name="clien-pass" title="Defina una contraseña para iniciar sesión">
                                </div>
                              </div>
                              <div class="col-xs-12 col-sm-6">
                                <div class="form-group label-floating">
                                    <label class="control-label"><i class="fa fa-lock"></i>&nbsp; Repita la contraseña</label>
                                    <input class="form-control" type="password" required name="clien-pass2" title="Repita la contraseña">
                                </div>
                              </div>
                            </div>
                          </div>
                          <p><button type="submit" class="btn btn-primary btn-block btn-raised">Registrarse</button></p>
                        </form> 
                    </div> 
                </div>
                    
                    
                    
                    ';
                  }
                  
                  
                  
                  ?>

                  </div>
              </div>
        </div>
    </section>
    <?php include './inc/footer.php'; ?>
</body>
</html>
                  
            <!-- <p class="lead text-center">
            <div class="col-xs-12 col-md-8">
                    <div class="dropdown">
                      <button class="btn btn-primary btn-raised dropdown-toggle" type="button" id="drpdowncategory" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Registrarse como
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu col-md-8" aria-labelledby="drpdowncategory"> -->
                      <!-- //  
                         // while($cate=mysqli_fetch_array($checkAllCat, MYSQLI_ASSOC)){
                             // echo ' -->
                                <!-- <li><a>Alumno</a> </li>
                                <li role="separator" class="divider"></li>
                                <li><a>Profesor</a>  </li>
                                <li role="separator" class="divider"></li>
                                <li><a>Directivo</a>  </li>
                                <li role="separator" class="divider"></li>
                                <li><a>Otros</a>  </li> -->
                               
                           <!-- //   ';
                        //  }
                       //  -->
                      <!-- </ul>
                    </div>
                  </div>
            </p> -->
            <!-- <div class="row">
                  
                <div class="col-sm-12">
                    <div id="container-form">
                       <p class="text-center lead">Registro de Clientes</p>
                       <br><br>
                       <form class="FormCatElec" action="process/regclien.php" role="form" method="POST" data-form="save">
                          <div class="container-fluid">
                            <div class="row">
                              <div class="col-xs-12">
                                <legend><i class="fa fa-user"></i> &nbsp; Datos personales</legend>
                              </div>
                              <div class="col-xs-6">
                                <div class="form-group label-floating">
                                  <label class="control-label"><i class="fa fa-address-card-o" aria-hidden="true"></i>&nbsp; Ingrese su número de DNI</label>
                                  <input class="form-control" type="text" required name="clien-nit" pattern="[0-9]{1,15}" title="Ingrese su número de DNI. Solamente números" maxlength="15" >
                                </div>
                              </div>
                              <div class="col-xs-6">
                                <div class="form-group label-floating">
                                  <label class="control-label"><i class="fa fa-address-card-o" aria-hidden="true"></i>&nbsp; Curso</label>
                                  <input class="form-control" type="text" required name="clien-nit" pattern="[a-zA-Z ]{1,50}" title="Ingrese el nombre de su curso " maxlength="15" >
                                </div>
                              </div>
                              <div class="col-xs-6">
                                <div class="form-group label-floating">
                                  <label class="control-label"><i class="fa fa-user"></i>&nbsp; Ingrese sus nombres</label>
                                  <input class="form-control" type="text" required name="clien-fullname" title="Ingrese sus nombres (solamente letras)" pattern="[a-zA-Z ]{1,50}" maxlength="50">
                                </div>
                              </div>
                              <div class="col-xs-6">
                                <div class="form-group label-floating">
                                  <label class="control-label"><i class="fa fa-cart"></i>&nbsp; Ingrese año Cursada</label>
                                  <input class="form-control" type="text" required name="clien-lastname" title="Ingrese el año de Cursada" pattern="{1,50}" maxlength="50">
                                </div>
                              </div>
                              <div class="col-xs-6">
                                <div class="form-group label-floating">
                                  <label class="control-label"><i class="fa fa-user"></i>&nbsp; Ingrese sus apellidos</label>
                                  <input class="form-control" type="text" required name="clien-lastname" title="Ingrese sus apellido (solamente letras)" pattern="[a-zA-Z ]{1,50}" maxlength="50">
                                </div>
                              </div>
                              <div class="col-xs-6">
                                <div class="form-group label-floating">
                                  <label class="control-label"><i class="fa fa-mobile"></i>&nbsp; Ingrese su número telefónico</label>
                                    <input class="form-control" type="tel" required name="clien-phone" maxlength="15" title="Ingrese su número telefónico. Mínimo 8 digitos máximo 15">
                                </div>
                              </div>
                              <div class="col-xs-6">
                                <div class="form-group label-floating">
                                  <label class="control-label"><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp; Ingrese su Email</label>
                                    <input class="form-control" type="email" required name="clien-email" title="Ingrese la dirección de su Email" maxlength="50">
                                </div>
                              </div>
                              <div class="col-xs-6">
                                <div class="form-group label-floating">
                                  <label class="control-label"><i class="fa fa-home"></i>&nbsp; Ingrese su dirección</label>
                                  <input class="form-control" type="text" required name="clien-dir" title="Ingrese la direción en la reside actualmente" maxlength="100">
                                </div>
                              </div>
                              <div class="col-xs-12">
                                <legend><i class="fa fa-lock"></i> &nbsp; Datos de la cuenta</legend>
                              </div>
                              <div class="col-xs-12">
                                <div class="form-group label-floating">
                                  <label class="control-label"><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp; Ingrese su nombre de usuario</label>
                                    <input class="form-control" type="text" required name="clien-name" title="Ingrese su nombre. Máximo 9 caracteres (solamente letras y numeros sin espacios)" pattern="[a-zA-Z0-9]{1,9}" maxlength="9">
                                </div>
                              </div>
                              <div class="col-xs-12 col-sm-6">
                                <div class="form-group label-floating">
                                  <label class="control-label"><i class="fa fa-lock"></i>&nbsp; Introduzca una contraseña</label>
                                  <input class="form-control" type="password" required name="clien-pass" title="Defina una contraseña para iniciar sesión">
                                </div>
                              </div>
                              <div class="col-xs-12 col-sm-6">
                                <div class="form-group label-floating">
                                    <label class="control-label"><i class="fa fa-lock"></i>&nbsp; Repita la contraseña</label>
                                    <input class="form-control" type="password" required name="clien-pass2" title="Repita la contraseña">
                                </div>
                              </div>
                            </div>
                          </div>
                          <p><button type="submit" class="btn btn-primary btn-block btn-raised">Registrarse</button></p>
                        </form> 
                    </div> 
                </div>
            </div> -->
