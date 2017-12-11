<?php

// print_r( $_GET );

$clientName = $_GET['vardas'];
$clientEmail = $_GET['email'];
$clientTitle = $_GET['tema'];
$clientText = $_GET['zinute'];

$clientEmail = trim($clientEmail);    //pasalina tarpus pries ir uz, kad nehackintu
$clientText = trim($clientText);

require './libs/PHPMailer-master/PHPMailerAutoload.php';
require './libs/PHPMailer-master/extras/htmlfilter.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                      // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = '';             // SMTP username
    $mail->Password = '';                        // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($clientEmail, $clientName);
    $mail->addAddress('s1sdasd2@gmail.com', 'Kauno Vynuogynas');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo($clientEmail, $clientName);
    // $mail->addCC('cc@mail.com');
    // $mail->addBCC('bcc@mail.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('./2.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                 // Set email format to HTML
    $mail->Subject = $clientTitle;
    $mail->Body    = $clientText;
    $mail->AltBody = $clientText;

    $mail->send();
    ?>
    <?php require_once('./head.php'); ?>

        <title>Kauno Vynuogynas</title>
        <meta http-equiv="refresh" content="1; ./email.php">
    </head>

    <?php
} catch (Exception $e) {
    // echo '<br />Nepavyko išsiųsti žinutės.<br />';
    echo 'Atsiprašome, nepavyko išsiųsti Jūsų žinutės, susisiekite telefonu. ' . $mail->ErrorInfo;
}
