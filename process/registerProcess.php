<?php

require ('../config.php');

$email = $_POST['email'];
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$password = password_hash($password, PASSWORD_DEFAULT);
$verif = md5($email.date('Y-m-d')) ;

$sql = "SELECT * FROM users WHERE email='$email'";
$query = mysqli_query ($con, $sql);
if (mysqli_num_rows($query) > 0) {
    echo '<script> alert ("Email sudah terdaftar"); </script>';
} else {
    $sql = "INSERT INTO users (name, email, username, password, verif_code) VALUES ('$name', '$email', '$username', '$password', '$verif')";
    $query = mysqli_query($con, $sql);
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require '../vendor/autoload.php';

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/OAuth.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/POP3.php';
require '../PHPMailer/src/SMTP.php';

//Create a new PHPMailer instance
$mail = new PHPMailer();

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
//SMTP::DEBUG_OFF = off (for production use)
//SMTP::DEBUG_CLIENT = client messages
//SMTP::DEBUG_SERVER = client and server messages
$mail->SMTPDebug = SMTP::DEBUG_OFF;

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
//Use `$mail->Host = gethostbyname('smtp.gmail.com');`
//if your network does not support SMTP over IPv6,
//though this may cause issues with TLS

//Set the SMTP port number:
// - 465 for SMTP with implicit TLS, a.k.a. RFC8314 SMTPS or
// - 587 for SMTP+STARTTLS
$mail->Port = 465;

//Set the encryption mechanism to use:
// - SMTPS (implicit TLS on port 465) or
// - STARTTLS (explicit TLS on port 587)
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = 'danielcetta5@gmail.com';

//Password to use for SMTP authentication
$mail->Password = 'QwEr!@mn';

//Set who the message is to be sent from
//Note that with gmail you can only use your account address (same as `Username`)
//or predefined aliases that you have configured within your account.
//Do not use user-submitted addresses in here
$mail->setFrom('no-replay@hotel.com', 'Customer Service Hotel');

//Set an alternative reply-to address
//This is a good place to put user-submitted addresses
//$mail->addReplyTo('replyto@example.com', 'First Last');

//Set who the message is to be sent to
$mail->addAddress($email, $name);

//Set the subject line
$mail->Subject = 'Verivication Account';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$body = "Hi.. ".$name."<br> Please Verivication your account before login to our website <br> http://localhost:8080/HOTEL/process/confirmEmail.php?code=".$verif;

$mail->Body = $body;

//Replace the plain text body with one created manually
$mail->AltBody = 'Verivication Account';



//send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo

 '<script>
    alert("Registrasi Berhasil"); window.location = "../page/loginPage.php"
 </script>';
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}
?>