<?php 
    session_start(); 
    error_reporting(E_PARSE);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio</title>
    <?php include './inc/link.php'; ?>
</head>

<body id="container-page-index">
<?php include './inc/navbar.php'; ?>
    <section id="slider-store" class="carousel slide" data-ride="carousel">    
         <div class="container tr">
            <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#slider-store" data-slide-to="0" class="active"></li>
            <li data-target="#slider-store" data-slide-to="1"></li>
            <li data-target="#slider-store" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="./assets/img/slider1.jpg" alt="slider1">
                <div class="carousel-caption">
                    Text Slider 1
                </div>
            </div>
            <div class="item">
                <img src="./assets/img/slider2.jpg" alt="slider2">
                <div class="carousel-caption">
                    Text Slider 2
                </div>
            </div>
            <div class="item">
                <img src="./assets/img/slider4.jpg" alt="slider3">
                <div class="carousel-caption">
                    Text Slider 3
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#slider-store" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#slider-store" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
            </div>
    </section>

<section id="prod-destacado-index" style="display: flex">
    
    <div class="container">
       <div class="page-header" style="display: flex">
           <h1>Productos <small>Destacados</small></h1>
           
       </div>
       <iframe width="1130" height="450" src="carruzelPrd.php" frameborder="" ></iframe>
    </div>
</section>
<section id="new-prod-index" style="display: flex">
    
    <div class="container">
       <div class="page-header" style="display: flex">
           <h1>Desayuno <small>o</small> Merienda</h1>
       </div>
       <iframe width="1130" height="450" src="carruzelPrd.php" frameborder="" ></iframe>
    </div>
</section>
<section id="new-prod-index" style="display: flex">
    
    <div class="container">
       <div class="page-header" style="display: flex">
           <h1>Almuerzo <small>o</small> Cena</h1>
       </div>
       <iframe width="1130" height="450" src="carruzelPrd.php" frameborder="" ></iframe>
    </div>
</section>
<section id="new-prod-index" style="display: flex">
    
    <div class="container">
       <div class="page-header" style="display: flex">
           <h1>Descubri <small>lo</small> Ultimo</h1>
       </div>
       <iframe width="1130" height="450" src="carruzelPrd.php" frameborder="" ></iframe>
    </div>
</section>
    
    <?php include './inc/footer.php'; ?>
</body>
</html>