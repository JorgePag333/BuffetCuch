<?php
 include 'inc/link.php';

include 'library/configServer.php';
include 'library/consulSQL.php';
require_once 'Mercadopago/vendor/autoload.php';
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

require 'phpmailer/phpmailer/src/Exception.php';
require 'phpmailer/phpmailer/src/PHPMailer.php';
require 'phpmailer/phpmailer/src//SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
  
if (isset($_POST['username'])) {
    echo '<script>
		  swal({
		    title: "Revisa tu mail",
		    text: "Te hemos enviado un mail a tu correo",
		    type: "success",
		    showCancelButton: true,
		    confirmButtonClass: "btn-success",
		    confirmButtonText: "Aceptar",
		    cancelButtonText: "Cancelar",
		    closeOnConfirm: false,
		    closeOnCancel: false
		    },
		    function(isConfirm) {
		    if (isConfirm) {
		         window.location.href= "https://ventasxt.ga/index.php";
		    } else {
		       window.location.href= "https://ventasxt.ga/recuperarform.php";
		    }
		  });
		  </script>';
        $usuario= $_POST['username'];
       
        $sql = ejecutarSQL::consultar("SELECT * FROM cliente WHERE NIT = '$usuario'");
        $comparar=mysqli_num_rows($sql);
      
        if ($comparar >0) {
            $comparar2=mysqli_fetch_array($sql);
            echo "Enviar mail de recuperacion a {$comparar2['Email']}";

            $token = uniqid();

         $_SESSION['token']=$token;
            try {
              
                $mail = new PHPMailer();

                try {
                    //Server settings
                    $mail->SMTPDebug = 0;                      //Enable verbose debug output
                    $mail->isSMTP();                                            //Send using SMTP
                    $mail->Host       = 'outlook.office365.com';                      //Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                    $mail->Username   = 'jorge_141288@hotmail.com';                      //SMTP username
                    $mail->Password   = 'Jorge01';                               //SMTP password
                    $mail->SMTPSecure = 'SSL';            //Enable implicit TLS encryption
                    $mail->Port       = 587;                                   //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                
                    //Recipients
                    $mail->setFrom('jorge_141288@hotmail.com', 'Taller el porteño');
                    $mail->addAddress($comparar2["Email"], $comparar2["Nombre"]);     //Add a recipient

                    //Content
                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject = 'Recupere su clave';
                    $mail->Body    = 'Haga clicko77 en este link: <a href="https://ventasxt.ga/recuperarsql.php?toc='.$_SESSION['token'].'&name='.$usuario.'"> ventasxt</a>';
                    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                    $mail->send();
                    echo 'Message has been sent';
                    
                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
            } catch (PDOException $exception) {
                echo 'No pude guardar el token: '.$exception->getMessage();
            }
        } else {
            echo "No existe ese usuario";
        }
    }
 
?>