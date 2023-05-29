<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->

<!DOCTYPE html>
    <!-- Coding by CodingLab | www.codinglabweb.com -->
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<title>Responsive Card Slider</title>-->

        <!-- Swiper CSS -->
        <link rel="stylesheet" href="./css/swiper-bundle.min.css">
      
        <!-- CSS -->
        <link rel="stylesheet" href="./css/estile.css">
                                        
    </head>
    <body>
        <div class="slide-container swiper">
            <div class="slide-content">        
                <div class="card-wrapper swiper-wrapper">     
                    
                            
                                
                            <?php
                            include 'library/configServer.php';
                            include 'library/consulSQL.php';
                              $consulta= ejecutarSQL::consultar("select * from producto where Stock > 0");
                            $totalproductos = mysqli_num_rows($consulta);
                            if($totalproductos>0){
                                while($fila=mysqli_fetch_array($consulta)){
                                    
                                echo '
                                <div class="card swiper-slide">
                                <div class="image-content">
                            <span class="overlay"></span>  
                                <div class="card-image">
                                    <img src="./assets/img-products/'.$fila['Imagen'].'"  class="card-img">
                                </div>
                            </div>
                            <div class="card-content">
                                <h2 class="name"></h2>
                                <p class="description"></p>
                                <button class="button"></button>
                            </div>
                        </div>
                        
                        
                        
                                    ';
                    }        
                          }          ?>
                </div>
        </div>
            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        
        </div>
    </body>

    <!-- Swiper JS -->
      <!-- Uncomment this line-->
    <script src="./js/swiper-bundle.min.js"></script>

    <!-- JavaScript -->
      <!--Uncomment this line-->
    <script src="./js/slider.js"></script>
</html>