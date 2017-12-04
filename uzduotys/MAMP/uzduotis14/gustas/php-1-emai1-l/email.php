<?php

print_r( $_GET );

$clientName = $_GET['name'];
$clientEmail = $_GET['email'];
$clientTitle = $_GET['antraste'];
$clientText = $_GET['klausimas'];

$clientEmail = trim($clientEmail);    //pasalina tarpus pries ir uz, kad nehackintu

require './libs/PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                      // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'testas@gmaili.com';             // SMTP username
    $mail->Password = 'xxxxxx';                        // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('netikras@gmail.com', $clientName);
    $mail->addAddress('testas9339@gmail.com', 'Vynuogynas');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo($clientEmail, $clientName);
    // $mail->addCC('cc@mail.com');
    // $mail->addBCC('bcc@mail.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('./2.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                 // Set email format to HTML
    $mail->Subject = $clientTitle;
    $mail->Body    = $clientText;
    $mail->AltBody = $clientText;

    $mail->send();
    echo 'Pavyko issiusti';
} catch (Exception $e) {
    echo '<br />Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}



//
