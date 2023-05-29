<?php 
require_once 'Mercadopago/vendor/autoload.php';
   
$access = "APP_USR-6056389123923028-070523-6a2b868d50f5a9291cc40de55aa6249b-5428116";
MercadoPago\SDK::setAccessToken($access);
?>