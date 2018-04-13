<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['textarea'];

//echo $name;
//echo $phone;
//echo $email;
//echo $message;
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings

    $mail->IsSMTP(); // telling the class to use SMTP
    $mail->SMTPAuth = true; // enable SMTP authentication
    $mail->SMTPSecure = "ssl"; // sets the prefix to the servier
    $mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
    $mail->Port = 465; // set the SMTP port for the GMAIL server
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->Username = 'mavend0.logic@gmail.com';                 // SMTP username
    $mail->Password = 'Mavend0@123';                           // SMTP password

    //sendere
    $mail->setFrom('mavend0.logic@gmail.com', 'Enteriors');
    //Recipients
    $mail->addAddress($email, $name);     // Add a recipient


    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Hello '.$name;
    $mail->Body    = 'Your Phone no is '.$phone;
    $mail->AltBody = $message;

    $mail->send();
    echo 'Message has been sent';
    header("Location: records.html");

} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
