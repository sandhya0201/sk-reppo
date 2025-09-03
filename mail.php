<?php
   // Import PHPMailer classes into the global namespace
   // These must be at the top of your script, not inside a function
   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\Exception;

   // Load Composer's autoloader
   require 'phpmailer/src/PHPMailer.php';
   require 'phpmailer/src/SMTP.php';
   require 'phpmailer/src/Exception.php';

   if(isset($_POST['email'])){
    $name=$_POST['name'];
    $number=$_POST['number'];
    $adress=$_POST['adress'];
    $note=$_POST['note'];
    $msg= 'name: '.$name. '</br> adress: .$adress.'
   }

   // Instantiation and passing `true` enables exceptions
   $mail = new PHPMailer(true);

   try {
    //Server settings
     $mail->SMTPDebug = 2;                      // Enable verbose debug output
     $mail->isSMTP();                                            // Send using SMTP
     $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP    server    to send through
     $mail->SMTPAuth   = true;                                   // Enable SMTP      authentication
    $mail->Username   = $username;                     // SMTP username
    $mail->Password   = $password;                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `  PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

//Recipients
   $mail->setFrom('no-reply@gmail.com',$username);
   $mail->addAddress($to);     // Add a recipient


   // Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

   // Content
   $mail->isHTML(true);                                  // Set email format to HTML
   $mail->Subject = $subject;
   $mail->Body    = $body;
   //$mail->AltBody =;

   $mail->send();

   echo "<script>";
   echo "window.alert('Email was sent')";
   echo "</script>";


  } catch (Exception $e) {
  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
 ?>
