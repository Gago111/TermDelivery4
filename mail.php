<style>
body {
  color:#fff;
}
</style>

<?php
session_start();
$_SESSION["name"] = $_GET["name"];
$_SESSION["mail"] = $_GET["email"];
$_SESSION["onderwerp"] = $_GET["onderwerp"];
$_SESSION["message"] = $_GET["message"];
$_SESSION["confirm-message"] = "Je bericht is verzonden";

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'pietertjeb1997@gmail.com';         // SMTP username
    $mail->Password = 'Alwayswin2002';                    // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('pietertjeb1997@gmail.com');
    $mail->addAddress ($_SESSION["mail"]);

    //$mail->addAddress('200682@edu.rocfriesepoort.nl');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content

    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = ($_SESSION["onderwerp"]);
    $mail->Body    = ($_SESSION["message"]);
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
    } catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
header( "refresh:0;url=index.php" );
