<?php
if(isset($_POST['contact-email'], $_POST['contact-message'])) {

    $uEmail = $_POST["contact-email"];
    $uQuestion = $_POST["contact-message"];
    $myEmail = "cryptoHoot@gmail.com";

    require "./libs/PHPMailer-master/PHPMailerAutoload.php";

    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
      //Server settings
      $mail->SMTPDebug = 0;                                 // Enable verbose debug output
      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = $myEmail;                 // SMTP username
      $mail->Password = 'noOneKnows:)';                           // SMTP password
      $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 587;                                    // TCP port to connect to

      //Recipients
      $mail->addAddress($myEmail, 'CRYPTO-HOOT');     // Add a recipient
      $mail->addReplyTo($uEmail, "Guest");

      //Content
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = "[CRYPTO-HOOT] Contact form message";
      $mail->Body    = $uQuestion;
      $mail->AltBody = $uQuestion;

      $mail->send();
      // echo '<br /><br />Message has been sent';
    } catch (Exception $e) {
      // echo 'Message could not be sent.';
      echo 'Mailer Error: ' . $mail->ErrorInfo;
    }

}
?>
