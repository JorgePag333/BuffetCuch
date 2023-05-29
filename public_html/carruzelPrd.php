
                            <?php
                            include './library/configServer.php';
                            include './library/consulSQL.php';
                            $consultaCat= ejecutarSQL::consultar("select * from categoria");
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
                                        <h4>Descripción</h4>
                                    </div>
                                    <div class="card-text">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum enim possimus dolorum non,
                                            modi
                                            sunt ips.</p>
                                    </div>
                                    <div class="card-link">
                                        <a href="#">Ver más</a>
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
                        ?>
                                
                                 
                            
                               
                           
                         
    