<?php

print_r($_GET);

$uName = $_GET['name'];
$uEmail = $_GET['email'];
$uTitle = $_GET['title'];
$uQuestion = $_GET['question'];
echo "<br />@@@@<br />";

require "./libs/PHPMailer-master/PHPMailerAutoload.php";

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'testasCoding@gmail.com';                 // SMTP username
    $mail->Password = 'slaptazodis';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    echo "<br />@@@@<br />";

    //Recipients
    $mail->setFrom('prezidentas@smetona.lt', 'Smetona');
    $mail->addAddress('testasCoding@gmail.com', 'Puslapiu kurejai');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo($uEmail, $uName);
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $uTitle;
    $mail->Body    = $uQuestion;
    $mail->AltBody = $uQuestion;
    echo "<br />@@@@<br />";

    $mail->send();
    echo '<br /><br />Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
