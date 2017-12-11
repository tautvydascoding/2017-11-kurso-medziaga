<?php

// print_r($_GET);

$clientEmail = $_POST['formos-email'];
$clientName = $_POST['formos-name'];
$clientPhone = $_POST['formos-phone'];
$clientContent = $_POST['formos-content'];


// Validate given variables
$clientEmail = trim($clientEmail); // removes spaces, tabs, vertical tabs: Pries ir uz stringo



require './libs/PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 1;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'nereikalingas123456789@gmail.com';         // SMTP username
    $mail->Password = 'REIKIA PASS';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;
    $mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);                                // TCP port to connect to

    //Recipients
    $mail->setFrom('---useris-is-puslapio@gmail.com', 'Klientas');  // Parodo kas atsiunte email
    $mail->addAddress('nereikalingas123456789@gmail.com', 'Mano useris');     // Add a recipient
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
    $mail->Body    = $clientContent . " tel: " . $clientPhone . "<br />";
    $mail->AltBody = $clientContent;


    $mail->send(); // Kiek kartu parasysi tik ir issius
    echo 'Message has been sent';
    // echo ("Sending disabled");
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
