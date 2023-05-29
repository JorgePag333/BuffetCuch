<?php
  session_start(); 
  error_reporting(E_PARSE);
require_once 'Mercadopago/vendor/autoload.php';
 include 'inc/link.php'; 
   
$access = "APP_USR-6056389123923028-070523-6a2b868d50f5a9291cc40de55aa6249b-5428116";
MercadoPago\SDK::setAccessToken($access);

// SDK de Mercado Pago
// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();
// Crea un ítem en la preferencia// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
//incluimos items
//echo $access;
 require_once 'carrito2.php';

echo '<h1 style="background-color: red;">Hola'.$titles.$pref.$cant.' </h1>';

$item->title = $titles;
$item->quantity =$cant ;
$item->unit_price = $pref;
$preference->items = array($item);
 


$preference->notification_url="https://localhost/jorgeV3/acreditacionMp.php";
$preference->back_urls = array(
      "success" => "https://localhost/jorgeV3/acreditacionMp.php"

  );
  $preference->save();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
<div>
    <a href="index.php" class="btn btn-lg btn-primary">Regresar <i class="fa fa-mail-reply"></i> 
                          </a> 
</div>

     
       <div class="modal-dialog" role="document">

 <script src="https://sdk.mercadopago.com/js/v2"> </script>           
          <div>
  <a href="<?php echo $preference->init_point;?>"><H1 class="btn btn-lg btn-raised btn-success btn-block" data-toggle="modal"> Se redirigira a MP
  <img class="img-responsive center-all-contens" src="assets/img/mplogo.png">
  
  </H1>
  </a>
  </div>
  </div>
  
          
<script>
// Agrega credenciales de SDK
const mp = new MercadoPago('APP_USR-1c9a4ea2-a4d9-4b87-94ef-644506872532', {
        locale: 'es-AR'
  });

  // Inicializa el checkout
  mp.checkout({
      preference: {
          id: ''
      },
      render: {
            container: '.$preference->init_point', // Indica dónde se mostrará el botón de pago
            label: 'Pagar', // Cambia el texto del botón de pago (opcional)
      }
});
</script>
</body>

</html>
  
  
  