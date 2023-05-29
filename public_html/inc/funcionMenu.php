<?php 
    require_once './library/configServer.php';
    require_once './library/consulSQL.php';
    require_once './inc/link.php';

function menuCategorias(){

    $checkAllCat=ejecutarSQL::consultar("SELECT * FROM categoria");
    if(mysqli_num_rows($checkAllCat)>=1):
        while($cate=mysqli_fetch_array($checkAllCat, MYSQLI_ASSOC)) {
            echo '
         
        <li>
        <a href="product.php?categ='.$cate['CodigoCat'].'">'.$cate['Nombre'] .'</a>
        </li>  
            ';
        }
       
    endif;
    
  
}

function carrito(){

    $verdadero="true";
$consultaCat= ejecutarSQL::consultar("select * from categoria where IsActive='true'");
$totalCAT = mysqli_num_rows($consultaCat);
    
if($totalCAT>0){
    while($fila3=mysqli_fetch_array($consultaCat)){
        $pi=$fila3['CodigoCat'];
            echo '
            <h2 class="te" >'.$fila3['Nombre'].'</h1>
            <div class="container">
            
                <div class="swiper-container mySwiper">
                    <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                            <div class="swiper-wrapper">
                
            ';
            

      $consulta= ejecutarSQL::consultar("select * from producto where Stock > 0 and CodigoCat =$pi");
    $totalproductos = mysqli_num_rows($consulta);
    if($totalproductos>0){
        while($fila=mysqli_fetch_array($consulta)){
            
        echo '    
    <div class="swiper-slide">
        <div class="image-content">
            <span class="overlay"></span>  
            <div class="card-image">
                <img src="./assets/img-products/'.$fila['Imagen'].'"  class="card-img">
            </div>
        </div>
        <div class="card-description">
            <div class="card-title">
            <h3>'.$fila['Marca'].'</h3>
            </div>
            <div class="card-text">
            <p>'.$fila['NombreProd'].'</p>
            <p>$'.$fila['Precio'].'</p>
            </div>
            <div class="card-link">
            <a href="infoProd.php?CodigoProd='.$fila['CodigoProd'].'" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
            </div>
        </div>
    </div>      
    
          
         
                      
         ';     
        }        
        mysqli_free_result($consulta);
       
    }             
      
   echo ' 
    </div>
    
    </div>

    </div>
    ';

}
mysqli_free_result($consultaCat);
}    
}

function TodosLosProductos(){
    $consulta= ejecutarSQL::consultar("select * from producto where Stock > 0");
    $totalproductos = mysqli_num_rows($consulta);
    if ($totalproductos>0) {
        while ($fila=mysqli_fetch_array($consulta)) {
            echo '
          <div class="col-xs-12 col-sm-6 col-md-4">
               <div class="tarjeta2">
               <div class="papi1">
                 <img class="papi" src="assets/img-products/'.$fila['Imagen'].'">
                 </div>
                 <div class="texto">
                   <h3>'.$fila['Marca'].'</h3>
                   <p>'.$fila['NombreProd'].'</p>
                   <p>$'.$fila['Precio'].'</p>
                   <p class="">
                       <a style="" href="infoProd.php?CodigoProd='.$fila['CodigoProd'].'" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                     
                   </p>

                 </div>
               </div>
           </div>     
           ';
        }
    }
}


function cateoriaIn($pepe){
    $consultaCat= ejecutarSQL::consultar("select * from categoria where CodigoCat=$pepe");
    $totalCAT = mysqli_num_rows($consultaCat);
    $resultado="";
    
if ($totalCAT>0) {
    while ($fila3=mysqli_fetch_array($consultaCat)) {
        $resultado=$fila3['Nombre'];
    }
}
    return $resultado;
}
function cateoria(){
    $consultaCat= ejecutarSQL::consultar("select * from categoria");
    $totalCAT = mysqli_num_rows($consultaCat);

    if ($totalCAT>0) {
        while ($fila3=mysqli_fetch_array($consultaCat)) {
            echo '
            <li>
        <a href="configAdmin.php?view=subcategory&&ide='.$fila3['CodigoCat'].'">'.$fila3['Nombre'] .'</a>
        </li>  
            
            
            
        
            
            
            ';
        }
    }
}
    function cateoriaCheck(){
        $consultaCat= ejecutarSQL::consultar("select * from categoria");
        $totalCAT = mysqli_num_rows($consultaCat);
    
        if ($totalCAT>0) {
            while ($fila3=mysqli_fetch_array($consultaCat)) {
                
                echo '
                <div class="">
                <label><input type="checkbox" name="check_lista[]" value="'.$fila3['Nombre'].'">'.$fila3['Nombre'].'</label>
                </div>
                
                
                
            
                
                
                ';
            }
           
        }    
}

function subcateoriaIn($pepe){
    $consultaCat= ejecutarSQL::consultar("select * from subcategorias where NumCat=$pepe");
    $totalCAT = mysqli_num_rows($consultaCat);
    $resultado="";
    
if ($totalCAT>0) {
    while ($fila3=mysqli_fetch_array($consultaCat)) {
        $resultado=$fila3['NombreCat'];
    }
}
    return $resultado;
}

function adicionalesCheck($pi){
    $consultaCat= ejecutarSQL::consultar("select * from adicionales where CodigoSubCat=$pi");
    $totalCAT = mysqli_num_rows($consultaCat);

    if ($totalCAT>0) {
        while ($fila3=mysqli_fetch_array($consultaCat)) {
            
            echo '
            <div class="caption" >
            <label style="color: black; padding: 2px"><input type="checkbox" name="check_lista[]" value="'.$fila3['nombre'].'">'.$fila3['nombre'].'</label>
            </div>
            
            
            
        
            
            
            ';
        }
       
    }    
}

function comentario(){

    $verdadero="true";
$consultaCat= ejecutarSQL::consultar("select * from comentarios where activo > 0");
$totalCAT = mysqli_num_rows($consultaCat);
    
if($totalCAT>0){
    while($fila3=mysqli_fetch_array($consultaCat)){
        $pi=$fila3['CodigoCat'];
            echo '
            <h2 class="te" >Comentarios</h1>
            <div class="container">
            
                <div class="swiper-container mySwiper">
                    <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                            <div class="swiper-wrapper">
                
            ';
            

      $consulta=  ejecutarSQL::consultar("select * from comenterios where activo !=0");
    $totalproductos = mysqli_num_rows($consulta);
    if($totalproductos>0){
        while($fila=mysqli_fetch_array($consulta)){
            $pi=$fila['CodigoProd'];
               echo '    
    <div class="swiper-slide">';
            $cons=ejecutarSQL::consultar("select * from producto where Stock > 0 and CodigoCat =$pi");
            foreach($cons as $img){
                echo'
                    <div class="image-content">
            <span class="overlay"></span>  
            <div class="card-image">
                <img src="./assets/img-products/'.$fila['Imagen'].'"  class="card-img">
            </div>
        </div>
            }';
        echo '    
    <div class="swiper-slide">
    
        <div class="card-description">
            <div class="card-title">
            <h3>'.$fila['NIT'].'</h3>
            </div>
            <div class="card-text">
            <p>'.$fila['Detalle'].'</p>
           
            </div>
           
        </div>
    </div>      
    
          
         
                      
         ';     
        }        
        mysqli_free_result($consulta);
       
    }             
      
   echo ' 
    </div>
    
    </div>

    </div>
    ';

}
mysqli_free_result($consultaCat);
}    
}
}
?>