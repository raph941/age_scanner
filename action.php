<?php

$server = 'localhost';
$user = 'root';
$password = '';
$database = 'test';
$conn= mysqli_connect($server,$user,$password,$database);

// $content_raw = file_get_contents("php://input");
// $decoded_data = json_decode($content_raw, true);
$email = $_POST['email'];

$str = "INSERT INTO email(email) 
    VALUES('$email')";

$query= mysqli_query($conn,$str);

// header("location:/age_scanner/index.html");

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'phpmailer/phpmailer/src/Exception.php';
// require 'phpmailer/phpmailer/src/PHPMailer.php';
// require 'phpmailer/phpmailer/src/SMTP.php';

// $mail = new PHPMailer(true);

// try {
//     //Server settings
//     $mail->SMTPDebug = 0;                                    // Enable verbose debug output
//     $mail->isSMTP();                                         // Send using SMTP
//     $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
//     $mail->SMTPAuth   = true;                                // Enable SMTP authentication
//     $mail->Username   = 'app.rescuecall@gmail.com';          // SMTP username
//     $mail->Password   = 'asdfasdf40';                        // SMTP password
//     $mail->SMTPSecure = 'tls';                               // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
//     $mail->Port       = 587;                                 // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

//     //Recipients
//     $mail->setFrom('app.agereal@gmail.com', 'Agereal');
//     $mail->addAddress($email, 'User');     // Add a recipient
//     $mail->addReplyTo('app.agereal@gmail.com', 'Information');
  
//    // Content
//     $mail->isHTML(true);                                  // Set email format to HTML
//     $mail->Subject = 'Welcome to Agereal';
//     $mail->Body    = '
//     <h1> Agereal | Coming soon</h1>
//     <p> You will receive an email when Our App is launched. Be Ready!</p>';
//     $mail->AltBody = 'You will receive an email when Our App is launched. Be Ready!';

//     $mail->send();
//     echo 'Message has been sent';
// } catch (Exception $e) {
//     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// }


?>