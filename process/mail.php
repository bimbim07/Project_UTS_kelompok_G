<?php
require ('../config.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require '../vendor/autoload.php';


$mail = new PHPMailer(true);
$mail->SMTPDebug = 0;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;

$mail->Username = 'danielcetta5@gmail.com';
$mail->Password = 'QwEr!@mn';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('danielcetta5@gmail.com', 'Nama Pengirim');
$mail->addAddress($_POST['Email'], $_POST['Nama']);
$mail->isHTML(true);
$mail->Subject = "Aktivasi pendaftaran Member";
$mail->Body = "Selemat, anda berhasil membuat akun. Untuk mengaktifkan akun anda silahkan klik link dibawah ini.
 <a href='http://http://localhost:8080/HOTEL/process/activation.php?t=".$token."'>http://http://localhost:8080/HOTEL/process/confirmEmail.php?t=".$token."</a>  ";
$mail->send();
echo 'Message has been sent';