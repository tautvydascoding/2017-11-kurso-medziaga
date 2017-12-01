<?php

print_r($_GET);

$clientEmail = $_GET['formos-email'];
$clientName = $_GET['formos-name'];
$clientPhone = $_GET['formos-phone'];
$clientContent = $_GET['formos-content'];


// Validate given variables
$clientEmail = trim($clientEmail); // removes spaces, tabs, vertical tabs: Pries ir uz stringo



require './libs/PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 3;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'nereikalingas123456789@gmail.com';         // SMTP username
    $mail->Password = 'nereikalingas';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('---belekas@gmail.com', 'Klientas');  // Parodo kas atsiunte email
    $mail->addAddress('nereikalingas123456789@gmail.com', 'Joe User');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo($clientEmail, $clientName);
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $clientName;
    $mail->Body    = "<b>$clientContent</b>";
    $mail->AltBody = $clientContent;


    // $mail->send(); // Kiek kartu parasysi tik ir issius
    // echo 'Message has been sent';
    echo ("Sending disabled");
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
