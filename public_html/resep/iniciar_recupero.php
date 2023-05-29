<?php
session_start();
require_once '../Mercadopago/vendor/autoload.php';

include '../library/configServer.php';
include '../library/consulSQL.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['username'])) {
        $usuario= $_POST['username'];
        
        $sql = ejecutarSQL::consultar("SELECT * FROM cliente WHERE Nombre = 'jorgepa'");
        $comparar=mysqli_num_rows($sql);
        echo $comparar;
        if ($comparar >0) {
            $comparar2=mysqli_fetch_array($sql);
            echo "Enviar mail de recuperacion a {$comparar2['Email']}";

            $token = uniqid();

         $_SESSION['token']=$token;
            try {
              
                $mail = new PHPMailer(true);

                try {
                    //Server settings
                    $mail->SMTPDebug = 2;                      //Enable verbose debug output
                    $mail->isSMTP();                                            //Send using SMTP
                    $mail->Host       = 'outlook.office365.com';                      //Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                    $mail->Username   = 'jorge_141288@hotmail.com';                      //SMTP username
                    $mail->Password   = 'Jorge01';                               //SMTP password
                    $mail->SMTPSecure = 'SSL';            //Enable implicit TLS encryption
                    $mail->Port       = 587;                                   //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                
                    //Recipients
                    $mail->setFrom('jorge_141288@hotmail.com', 'Mailer');
                    $mail->addAddress('estacreado1@gmail.com', 'Joe User');     //Add a recipient

                    //Content
                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject = 'Recupere su clave';
                    $mail->Body    = 'Haga click en <a href="http://localost:8989/resp/recuperarsql.php">este link</a>';
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
