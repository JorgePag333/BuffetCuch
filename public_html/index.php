<?php 
    session_start(); 
    error_reporting(E_PARSE);
    //require_once './inc/funcionMenu.php';
?>
<?php include './inc/link.php'; ?>
<?php include './inc/navbar.php'; ?> 
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio</title>
   
    
    
    
</head>


<body >


<header>

<div style=" position:  absolute; z-index: 3000;"></div>




<section id="slider-store" class="carousel slide" data-ride="carousel">    

<div class="caruu">

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



</header>

<main>





<div class="flex1" >

<?php //include 'carruzelPrd.php'; 
        
    carrito();
?>


</div>
<div class="flex2" >

<?php //include 'carruzelPrd.php'; 
        
    comentario();
?>


</div>


</main>

<footer>

    <?php include './inc/footer.php'; ?>
    
    </footer>
  

    

</body>
</html>