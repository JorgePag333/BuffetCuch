<!-- 
                            include 'library/configServer.php';
                            include 'library/consulSQL.php';
                            $consultaCat= ejecutarSQL::consultar("select * from categoria");
                            $totalCAT = mysqli_num_rows($consultaCat);
                            
                            if($totalCAT>0){
                                while($fila3=mysqli_fetch_array($consultaCat)){
                                    echo '<h1>'.$fila3['Nombre'].'</h1>';
                                }
                            } -->




<?php
                            include 'library/configServer.php';
                            include 'library/consulSQL.php';
                            $consultaCat= ejecutarSQL::consultar("select * from categoria");
                            $totalCAT = mysqli_num_rows($consultaCat);
                            
                            if($totalCAT>0){
                                while($fila3=mysqli_fetch_array($consultaCat)){
                                    $pi=$fila3['CodigoCat'];
                                    echo '<div><h1 class="til">'.$fila3['Nombre'].'</h1></div>
                             
                                    <div class="image-content"> 
                                    
                                    ';
                                    

                              $consulta= ejecutarSQL::consultar("select * from producto where Stock > 0 and CodigoCat =$pi");
                            $totalproductos = mysqli_num_rows($consulta);
                            if($totalproductos>0){
                                while($fila=mysqli_fetch_array($consulta)){
                                    
                                echo '
                              
                                    
                                         
                                        
                                                <img class="imag2" src="./assets/img-products/'.$fila['Imagen'].'" >
                                            
                                    
                                  
                                 
                                              
                                 ';     
                                }        
                                
                               
                            }             
                              
                            ?> </div><?php
                        }
                        }    ?>